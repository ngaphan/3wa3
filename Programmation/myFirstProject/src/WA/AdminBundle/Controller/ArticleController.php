<?php
namespace WA\AdminBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
// pour utiliser Response

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WA\BlogBundle\Entity\Article;
use WA\BlogBundle\Form\ArticleType;


class ArticleController extends Controller
{
    public function editAction( $articleId , Request $request )
    {

        $entityManager=$this
            ->getDoctrine()
            ->getManager();

        $entityRepository=$entityManager
            ->getRepository("WABlogBundle:Article");

        $articleObject = $entityRepository->find($articleId);

        // creer un formulaire objet
        $articleForm=$this
            ->get('form.factory')
            ->create(new ArticleType(), $articleObject);

        // formulaire hml
        $articleFormView=$articleForm->createView();

    //  Le formulaire est modifié .
    //  si la verification de ts les champs et les valeurs attendues est OK
        if ($articleForm->handleRequest($request)->isValid())
        {

            // on enregistre dans la base de données le formulaire
            $entityManager->persist($articleObject); //equivalent à query prepare
            $entityManager->flush(); //equivalent à execute - execute tous les persist
            return($this->redirect($this->generateUrl('wa_ab_dashboard')));

        }
        //  verification des champs PAS OK
        // on affiche les erreurs en gardant les données modifiées

        $rendererView=$this->render("WAAdminBundle:Article:form.html.twig" , array(
            'articleForm'=>$articleFormView
            ));
        return $rendererView;


    }


    public function deleteAction($articleId)
    {
        $entityManager=$this->getDoctrine()->getManager();
        $entityRepository=$entityManager->getRepository("WABlogBundle:Article");
        $articleObject = $entityRepository->find($articleId); // = findByArticleId($articleId);

        if (!$articleObject)
        {
            throw $this->createNotFoundException("l'article demandé n'existe plus ... Impossible de  supprimer  la référence " . $articleId);
        }
        $entityManager->remove($articleObject);
        $entityManager->flush(); //equivalent à execute - execute tous les persist
        return($this->redirect($this->generateUrl('wa_ab_dashboard')));
    }

    public function addAction(Request $request)
    {

        $doctrine=$this->getDoctrine();
        $entityManager=$doctrine->getManager();

        $formFactory=$this->get('form.factory');
        $articleObject = new Article(); // objet article vide
        $form=$formFactory->create(new ArticleType(), $articleObject); // creer un formulaire objet
        $articleForm=$form->createView();


        if ($form->handleRequest($request)->isValid()) // le formulaire est rempli
        {

            // on enregistre dans la base de données le formulaire
            $entityManager->persist($articleObject); //equivalent à query prepare
            $entityManager->flush(); //equivalent à execute - execute tous les persist
            return($this->redirect($this->generateUrl('wa_ab_dashboard')));

        }

        $rendererView=$this->render("WAAdminBundle:Article:form.html.twig" , array(
            'articleForm'=>$articleForm
        ));
        return  $rendererView
            ;


    }
}