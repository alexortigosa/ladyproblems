<?php

namespace Alex\CustomUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlexCustomUserBundle:Default:index.html.twig');
    }

    public function denegadoAction()
    {
        return $this->render('AlexCustomUserBundle:Security:denyaccess.html.twig');
    }



}
