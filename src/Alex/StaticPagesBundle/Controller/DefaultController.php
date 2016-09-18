<?php

namespace Alex\StaticPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
        $request->setLocale('es');
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

    private function getBreadCrumb($key){

    	$ret = array();
    	/*if(array_key_exists($key,$this->BREADCRUM))
    	{

    		return "<li class='active'><a href='".$this->get('router')->generate($this->BREADCRUM[$key][1])."'>".$this->BREADCRUM[$key][0]."</a></li>";	
    	}
    	else
    		if(array_key_exists($key,$this->BREADCRUM["servicios"])){
    			return "<li><a href='#'>servicios</a></li>
    					<li><a href='".$this->get('router')->generate($this->BREADCRUM["servicios"][$key][1])."'>".$this->BREADCRUM["servicios"][$key][0]."</a></li>";
    		}
    	return "<li><a href='#'>Not muctch</a></li>";*/

    	if(array_key_exists($key,$this->BREADCRUM))
    	{

    		array_push($ret, $this->BREADCRUM[$key]);
    	}
    	else
    		if(array_key_exists($key,$this->BREADCRUM["servicios"])){
    			array_push($ret, array("servicios","#"));
    			array_push($ret, $this->BREADCRUM["servicios"][$key]);
    		}
    	return $ret;;

    }
}
