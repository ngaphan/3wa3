<?php
namespace WA\AdminBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
// pour utiliser Response

use  Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function dashBoardAction()
    {

        $entityRepository=$this->getDoctrine()
            ->getManager()
            ->getRepository("WABlogBundle:Article")
        ;
        //$articlesList=$entityRepository->findAll();
        $articlesList=$entityRepository->findAll();

        $renderedView = $this->render("WAAdminBundle:Page:dashboard.html.twig" , array(
            'articlesList' => $articlesList
        ));
        return($renderedView);
    }



}