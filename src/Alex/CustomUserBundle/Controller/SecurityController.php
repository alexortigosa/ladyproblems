<?php

namespace Alex\CustomUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends BaseController
{

    public function checkAction()
    {
        $response = $this->forward('AlexStaticPagesBundle:Default:index');
        return $response;
    }

    public function logoutAction()
    {
        $response = $this->forward('AlexCustomUserBundle:Security:login');
        return $response;
    }

}
