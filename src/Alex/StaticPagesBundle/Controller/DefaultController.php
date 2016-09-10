<?php

namespace Alex\StaticPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlexStaticPagesBundle:Home:index.html.twig');
    }
}
