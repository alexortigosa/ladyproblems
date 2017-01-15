<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 14/01/2017
 * Time: 23:57
 */

namespace Alex\StaticPagesBundle\Controller;

use Alex\StaticPagesBundle\Entity\Contact;
use Alex\StaticPagesBundle\Entity\Servicio;
use Alex\StaticPagesBundle\Utils\Utils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;


class ServicioController extends Controller
{
    function mostrarPeticionesSegunPreferenciasAction(Request $request){
            $contact = new Contact();
            return $this->render('@AlexStaticPages/Servicios/listadofiltrado.html.twig',array(
            'data' => $request->request->get('submit', 'default value if bar does not exist')));
            /*$form = $this->createForm(ContactType::class,$contact);
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $contact = $form->getData();
                // for example, if Task is a Doctrine entity, save it!
                // $em = $this->getDoctrine()->getManager();
                // $em->persist($task);
                // $em->flush();
                return $this->render('@AlexStaticPages/Servicios/listadofiltrado.html.twig',array(
                    'data' => $contact));
            }
            else return $this->redirectToRoute('alex_static_pages_contact_fail');

            return $this->render('AlexStaticPagesBundle:Home:index.html.twig',
                array("breadcrumbs" => $this->getBreadCrumb("home")));*/

    }

    function mostrarPeticionAction($id = 1){
        return $this->render('@AlexStaticPages/Servicios/peticion.html.twig',array(
            'idpet' => $id));
    }
}