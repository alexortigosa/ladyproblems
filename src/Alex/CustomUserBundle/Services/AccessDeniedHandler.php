<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 23/12/2016
 * Time: 10:15
 */

namespace Alex\CustomUserBundle\Services;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Bundle\FrameworkBundle\Routing\Router as Router;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    private $router;

    public function __construct($route)
    {
        $this->router=$route;
    }




    /**
     * Handles an access denied failure.
     *
     * @param Request $request
     * @param AccessDeniedException $accessDeniedException
     *
     * @return Response may return null
     */

    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        // TODO: Implement handle() method.

        $response = new RedirectResponse($this->router->generate('acceso_denagado_path'));
        return $response;
    }
}