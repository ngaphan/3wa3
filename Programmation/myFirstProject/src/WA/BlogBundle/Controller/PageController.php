<?php
namespace WA\BlogBundle\Controller;

//use Symfony\Component\HttpFoundation\Response;
// pour utiliser Response

use  Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $renderedView = $this->render("WABlogBundle:Page:home.html.twig" );
        return($renderedView);
    }

    public  function contactAction()
    {
        $renderedView = $this->render("WABlogBundle:Page:contact.html.twig" );
        return($renderedView);
    }



}