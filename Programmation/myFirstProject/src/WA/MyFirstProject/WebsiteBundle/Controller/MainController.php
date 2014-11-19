<?php
namespace WA\MyFirstProject\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function helloAction()
    {
        $response=new Response('MIAOU  le chat Miaou');
        return($response);
    }
}