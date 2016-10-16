<?php

namespace Alex\StaticPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LenguageController extends Controller
{
    /**
     * @Route("/switch")
     */
    public function switchAction()
    {
        return $this->render('AlexStaticPagesBundle:Lenguage:switch.html.twig', array(
            // ...
        ));
    }

    public function englishAction(Request $request)
    {
        $this->get('session')->setLocale('en_US');
        return $this->redirect($request->headers->get('referer'));
    }
    public function spanishAction(Request $request)
    {
        $this->get('session')->setLocale('es_ES');
        return $this->redirect($request->headers->get('referer'));
    }

    public function chineseAction(Request $request)
    {
        $this->get('session')->setLocale('zh_CN');
        return $this->redirect($request->headers->get('referer'));
    }

    public function frenchAction(Request $request)
    {
        $this->get('session')->setLocale('fr_FR');
        return $this->redirect($request->headers->get('referer'));
    }

}
