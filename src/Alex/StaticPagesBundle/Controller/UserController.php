<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/12/2016
 * Time: 19:48
 */

namespace Alex\StaticPagesBundle\Controller;



use Alex\StaticPagesBundle\Entity\Consumicion;
use Alex\StaticPagesBundle\Entity\Contact;
use Alex\StaticPagesBundle\Entity\Sorteo;
use Alex\StaticPagesBundle\Utils\Utils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class UserController extends Controller
{

    public function muestratorneosAction(){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $consumiciones=null;

        return $this->render('@AlexStaticPages/User/mysorteos.html.twig', array(
            'user' => $user,
            'consumiciones' => $consumiciones,
        ));
    }
    public function asignarteguntwitAction(){




    }
}