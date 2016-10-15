<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/10/2016
 * Time: 19:17
 */

namespace Alex\StaticPagesBundle\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class RequestListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            // don't do anything if it's not the master request
            return;
        }
        else{

        }

        $request = setLocateSelected($event->getRequest());

    }
    private function setLocateSelected(Request $request){

        // some logic to determine the $locale
        $request->setLocale("es");
        return $request;
    }
}