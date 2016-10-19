<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 19/10/2016
 * Time: 11:02
 */

namespace Alex\CustomUserBundle\Services\Auth\Handler;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class LogoutSuccessHandler implements LogoutSuccessHandlerInterface
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Creates a Response object to send upon a successful logout.
     *
     * @param Request $request
     *
     * @return Response never null
     */
    public function onLogoutSuccess(Request $request)
    {
        // TODO: Implement onLogoutSuccess() method.
        // redirect the user to where they were before the login process begun.
        $referer_url = $request->headers->get('referer');

        $response = new RedirectResponse($referer_url);
        return $response;
    }
}