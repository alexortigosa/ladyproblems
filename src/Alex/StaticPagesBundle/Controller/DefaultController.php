<?php

namespace Alex\StaticPagesBundle\Controller;

use Alex\StaticPagesBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Alex\StaticPagesBundle\Form\ContactType;

class DefaultController extends Controller
{
	private $BREADCRUM =  array(
		"home" => array("Home","alex_static_pages_homepage"),
		"servicios" => array(
			'ecom' =>  array("e-commerce","alex_static_pages_ecomerce"),
			'integration' => array('Integración',"alex_static_pages_integration"),
			'medida' => array('A medida',"alex_static_pages_medida"),
			),
		"contacto" => array("Contacto",""),
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
    public function contactAction()
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class,$contact,array(
            'action' => $this->generateUrl('alex_static_pages_contact_post'),
            'method' => 'POST'
        ));
        return $this->render('AlexStaticPagesBundle:contacto:contact.html.twig',
            array(
                "form" => $form->createView(),
                "breadcrumbs" => $this->getBreadCrumb("integration"))
        );
    }
    public function contactpostAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class,$contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $contact = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($task);
            // $em->flush();

            return $this->redirectToRoute('alex_static_pages_contact_succes');
        }
        else return $this->redirectToRoute('alex_static_pages_contact_fail');

        return $this->render('AlexStaticPagesBundle:Home:index.html.twig',
            array("breadcrumbs" => $this->getBreadCrumb("home")));
    }
    public function formsuccesAction(){
        return $this->render('AlexStaticPagesBundle:contacto:succesform.html.twig');
    }
    public function formfailedAction(){
        return $this->render('AlexStaticPagesBundle:contacto:failedform.html.twig');
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
