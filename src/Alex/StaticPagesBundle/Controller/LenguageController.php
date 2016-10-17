<?php

namespace Alex\StaticPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
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
        $request->getSession()->set('_locale','en');
        return $this->redirect($request->headers->get('referer'));
    }
    public function spanishAction(Request $request)
    {
        $request->getSession()->set('_locale','es');
        return $this->redirect($request->headers->get('referer'));
    }

    public function chineseAction(Request $request)
    {
        $request->getSession()->set('_locale','zh');
        return $this->redirect($request->headers->get('referer'));
    }

    public function frenchAction(Request $request)
    {
        $request->getSession()->set('_locale','fr');
        return $this->redirect($request->headers->get('referer'));
    }

}
