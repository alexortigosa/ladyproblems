<?php

namespace Alex\StaticPagesBundle\Controller;

use Alex\StaticPagesBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Alex\StaticPagesBundle\Form\ContactType;
use Alex\StaticPagesBundle\Utils\Utils;

class DefaultController extends Controller
{
	private $BREADCRUM =  array(
		"home" => array("Home","alex_static_pages_homepage"),
		"servicios" => array(
			'ecom' =>  array("e-commerce","alex_static_pages_ecomerce"),
			'integration' => array('Integración',"alex_static_pages_integration"),
			'medida' => array('A medida',"alex_static_pages_medida"),
			),
		"contacto" => array("Contacto","alex_static_pages_contact"),
        "contacto" => array("sobrenosotros","alex_static_pages_about"),
		);



    public function indexAction(Request $request)
    {
        return $this->render('AlexStaticPagesBundle:Home:index.html.twig',
        	array("breadcrumbs" => $this->getBreadCrumb("home")));
    }
    public function ecomAction()
    {
        return $this->render('AlexStaticPagesBundle:Servicios:ecom.html.twig',
        	array("breadcrumbs" => $this->getBreadCrumb("ecom")));
    }
    public function medidaAction()
    {
        return $this->render('AlexStaticPagesBundle:Servicios:medida.html.twig',
        	array("breadcrumbs" => $this->getBreadCrumb("medida")));
    }
    public function integrationAction()
    {
        return $this->render('AlexStaticPagesBundle:Servicios:integration.html.twig',
        	array("breadcrumbs" => $this->getBreadCrumb("integration")));
    }
    public function layoutAction()
    {
        return $this->render('AlexStaticPagesBundle:Home:layout.html.twig',
            array("breadcrumbs" => $this->getBreadCrumb("integration")));
    }
    public function mapAction()
    {
        return $this->render('AlexStaticPagesBundle:Default:map.html.twig',
            array("breadcrumbs" => $this->getBreadCrumb("integration")));
    }
    public function sobreAction()
    {
        return $this->render('AlexStaticPagesBundle:Servicios:sobrenosotros.html.twig',
            array("breadcrumbs" => $this->getBreadCrumb("sobrenosotros")));
    }
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class,$contact,array(
            //'action' => $this->generateUrl('alex_static_pages_contact_post'),
            'method' => 'POST'
        ));
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $contact = $form->getData();
            $validator = $this->get('validator');
            $errors = $validator->validate($contact);
            if (count($errors) > 0) {
                return $this->render('AlexStaticPagesBundle:contacto:contact.html.twig',
                    array(
                        "form" => $form->createView(),
                        'errors' => $errors,
                        "breadcrumbs" => $this->getBreadCrumb("contacto"))
                );
            }
            else {
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                return $this->redirectToRoute('alex_static_pages_contact_succes');
            }
        }
        return $this->render('AlexStaticPagesBundle:contacto:contact.html.twig',
            array(
                "form" => $form->createView(),
                "breadcrumbs" => $this->getBreadCrumb("contacto"))
        );
    }
    public function contactpostAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $contact = $form->getData();
            $validator = $this->get('validator');
            $errors = $validator->validate($contact);

            if (count($errors) > 0) {
                $errorsString = (string)$errors;
             }
            // for example, if Task is a Doctrine entity, save it!
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($task);
            // $em->flush();
            return $this->render('AlexStaticPagesBundle:contacto:contact.html.twig',array(
                'errors' => $errors,
                'breadcrumbs' => $this->getBreadCrumb('contacto')));
        }
        else return $this->redirectToRoute('alex_static_pages_contact_fail');

        return $this->render('AlexStaticPagesBundle:Home:index.html.twig',
            array("breadcrumbs" => $this->getBreadCrumb("home")));
    }
    public function formsuccesAction(){
        return $this->render('AlexStaticPagesBundle:contacto:succesform.html.twig',array("breadcrumbs" => $this->getBreadCrumb("contacto")));
    }
    public function formfailedAction(){
        return $this->render('AlexStaticPagesBundle:contacto:failedform.html.twig',array("breadcrumbs" => $this->getBreadCrumb("contacto")));
    }

    public function pruebaultimaAction(){
        return $this->render('AlexStaticPagesBundle:contacto:failedform.html.twig',array("breadcrumbs" => $this->getBreadCrumb("contacto")));
    }

    public function qrAction($idcon=-1)
    {
        $url;
        if($idcon<0){
            $url=$this->generateUrl(
                'alex_static_pages_contact_fail',true);
        }
        else{
            $url=$this->generateUrl(
                'alex_static_pages_qr_validation',
                array('idcon' => $idcon)
            ,true);
        }
        return $this->render('AlexStaticPagesBundle:User:myqr.html.twig',
            array("breadcrumbs" => "asd",
                    'urlvalidation' => "http://elidealbar.alexortigosa.es".$url));

    }
    public function qrvalidateAction($idcon=-1)
    {
        if(null !== $c=$this->getDoctrine()->getRepository('AlexStaticPagesBundle:Consumicion')->findBy(array(
            'id' => $idcon,
            'ganador' => 1
        )))
            return $this->render('@AlexStaticPages/Consumicion/validacionok.html.twig',
                array(
                    "breadcrumbs" => "asd",
                    "consumicion" => $c
                ));
        else
            return $this->render('@AlexStaticPages/Consumicion/validacionfail.html.twig',
                array(
                    "breadcrumbs" => "asd",
                    "consumicion" => $c));

    }

    public function twittsAction(){
        $twitter = $this->get('alex_custom.twitter');


        // Or retrieve the timeline using the generic query method
        $response = $twitter->query('search/tweets', 'GET', 'json',array(
            "q" => "@el_ideal_bar"
        ));
        $tweets = json_decode($response->getContent());
        return $this->render('AlexStaticPagesBundle:tweets:lista.html.twig',
            array("breadcrumbs" => "asd",
                "twets" => Utils::getUsersAndDates($tweets)));

    }

    public function sorteosAction(){
            $consumiciones=array();
            $sorteos = $this->getDoctrine()
            ->getRepository('AlexStaticPagesBundle:Sorteo')
            ->findAllWithCustomers();
            foreach ($sorteos as $sorteo){
                $consumiciones[$sorteo->getId()]=array();
                foreach ($sorteo->getParticipantes() as $consumicion){
                    array_push($consumiciones[$sorteo->getId()],$consumicion->getUsuario()->getTwitname());
                }
                $consumiciones[$sorteo->getId()]=array_count_values($consumiciones[$sorteo->getId()]);
            }
        return $this->render('AlexStaticPagesBundle:Sorteo:sorteos.html.twig',
            array("breadcrumbs" => "asd",
                "sorteos" => $sorteos,
                "consumiciones" => $consumiciones));

    }

    private function getBreadCrumb($key){
    	$ret = array();
    	if(array_key_exists($key,$this->BREADCRUM))
    		array_push($ret, $this->BREADCRUM[$key]);
    	else
    		if(array_key_exists($key,$this->BREADCRUM["servicios"])){
    			array_push($ret, array("servicios","#"));
    			array_push($ret, $this->BREADCRUM["servicios"][$key]);
    		}
    	return $ret;;
    }
}
