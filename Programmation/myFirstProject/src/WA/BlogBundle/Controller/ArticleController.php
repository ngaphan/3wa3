<?php
namespace WA\BlogBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
// pour utiliser Response

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WA\BlogBundle\Entity\Article;
use WA\BlogBundle\Form\ArticleType;


class ArticleController extends Controller
{
    public function listAction()
    {

        $entityRepository=$this->getDoctrine()
            ->getManager()
            ->getRepository("WABlogBundle:Article")
        ;
        //$articlesList=$entityRepository->findAll();
        $articlesList=$entityRepository->listByDateDesc();

        $renderedView = $this->render("WABlogBundle:Article:articles.html.twig" , array(
            'articlesList' => $articlesList
        ));
        return($renderedView);
    }



    public function showAction($articleId)
    {
    $entityRepository=$this->getDoctrine()
                            ->getManager()
                            ->getRepository("WABlogBundle:Article")
    ;
        // on cree l objet $articleObject en le selectionnant ds la bdd par son $articleId
    $articleObject =$entityRepository->findOneByArticleId($articleId);
       // print_r($articleObject);

        // si l article n existe pas , $articleObject est null
    if (!$articleObject)
    {
        throw $this->createNotFoundException("l'article demandé n'existe plus ... " . $articleId);
    }

    $renderedView = $this->render("WABlogBundle:Article:article.html.twig" , array(
        'article' => $articleObject
    ));
     return($renderedView);
    }


}