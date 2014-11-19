<?php
    namespace WA\AdminBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
// pour utiliser Response

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use WA\BlogBundle\Entity\Category;
    use WA\BlogBundle\Form\CategoryType;


    class CategoryController extends Controller
    {
        public function listAction()
        {

            $entityRepository=$this
                ->getDoctrine()
                ->getManager()
                ->getRepository("WABlogBundle:Category")
            ;
            //$articlesList=$entityRepository->findAll();
            $categoryList=$entityRepository->findAll();

            $renderedView = $this->render("WAAdminBundle:Category:categories.html.twig" , array(
                'categoryList' => $categoryList
            ));
            return($renderedView);
        }

        public function addAction(Request $request)
        {
            $entityManager=$this
                ->getDoctrine()
                ->getManager();

            $formFactory=$this->get('form.factory');
            $categoryObject = new Category(); // objet article vide
            $form=$formFactory->create(new CategoryType(), $categoryObject); // creer un formulaire objet
            $categoryForm=$form->createView();


            if ($form->handleRequest($request)->isValid()) // le formulaire est rempli
            {

                // on enregistre dans la base de données le formulaire
                $entityManager->persist($categoryObject); //equivalent à query prepare
                $entityManager->flush(); //equivalent à execute - execute tous les persist
                return($this->redirect($this->generateUrl('wa_ab_categories')));

            }

            $rendererView=$this->render("WAAdminBundle:Category:form.html.twig" , array(
                'categoryForm'=>$categoryForm
            ));
            return  $rendererView
                ;


        }

        public function editAction( $categoryId , Request $request )
        {

            $entityManager=$this
                ->getDoctrine()
                ->getManager();

            $entityRepository=$entityManager
                ->getRepository("WABlogBundle:Category");

            $categoryObject = $entityRepository->find($categoryId);
            if (!$categoryObject)
            {
                throw $this->createNotFoundException('Non Categorie non trouvée' . $categoryId);
            }
            // creer un formulaire objet
            $categoryForm=$this
                ->get('form.factory')
                ->create(new CategoryType(), $categoryObject);

            // formulaire hml
            $categoryFormView=$categoryForm->createView();

            //  Le formulaire est modifié .
            //  si la verification de ts les champs et les valeurs attendues est OK
            if ($categoryForm->handleRequest($request)->isValid())
            {

                // on enregistre dans la base de données le formulaire
                $entityManager->persist($categoryObject); //equivalent à query prepare
                $entityManager->flush(); //equivalent à execute - execute tous les persist
                return($this->redirect($this->generateUrl('wa_ab_categories')));

            }
            //  verification des champs PAS OK
            // on affiche les erreurs en gardant les données modifiées

            $rendererView=$this->render("WAAdminBundle:Category:form.html.twig" , array(
                'categoryForm'=>$categoryFormView
            ));
            return $rendererView;


        }


        public function deleteAction($categoryId)
        {
            $entityManager=$this->getDoctrine()->getManager();
            $entityRepository=$entityManager->getRepository("WABlogBundle:Category");
            $categoryObject = $entityRepository->find($categoryId); // = findByArticleId($articleId);

            if (!$categoryObject)
            {
                throw $this->createNotFoundException("la catégorie demandée n'existe plus ... Impossible de  supprimer  la référence " . $categoryId);
            }
            $entityManager->remove($categoryObject);
            $entityManager->flush(); //equivalent à execute - execute tous les persist
            return($this->redirect($this->generateUrl('wa_ab_categories')));
        }


    }