<?php

namespace Alex\CustomUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{

    public function checkAction()
    {
        return $this->render('@AlexStaticPages/Servicios/ecom.html.twig');
    }
}
