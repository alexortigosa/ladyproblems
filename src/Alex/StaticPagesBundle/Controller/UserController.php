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
        $consumiciones=$this->getDoctrine()->getRepository('AlexStaticPagesBundle:Sorteo')->findAllOfCustomer(1);

        return $this->render('@AlexStaticPages/User/mysorteos.html.twig', array(
            'user' => $user,
            'consumiciones' => $consumiciones,
        ));
    }
    public function asignarteguntwitAction(){


        $twitter = $this->get('alex_custom.twitter');


        // Or retrieve the timeline using the generic query method
        $response = $twitter->query('search/tweets', 'GET', 'json',array(
            "q" => "@aotechbcn"
        ));
        $tweets = json_decode($response->getContent());
        $users=Utils::getUsersAndDates($tweets);

        $em=$this->getDoctrine()->getRepository('AlexStaticPagesBundle:User');
        $emConsumicion=$this->getDoctrine()->getRepository('AlexStaticPagesBundle:Consumicion');
        $emSorteo=$this->getDoctrine()->getRepository('AlexStaticPagesBundle:Sorteo');

        foreach ($users as $user){
            if($u = $em->findOneBy(array(
                'twitname' => $user['user']))){
                //$formatted_date =  date('Y-m-d H:i:s', strtotime($user['fecha']));
                $formatted_date=new \DateTime($user['fecha']);
                if(!$c=$emConsumicion->findOneBy(array("usuario" => $u->getId(),"fecha" => $formatted_date))){
                    $sorteo=$emSorteo->find(1);
                    $con = new Consumicion();
                    $con->setUsuario($u);
                    $con->setArticulo("Agua");
                    $con->setFecha($formatted_date);
                    $con->setSorteo($sorteo);
                    $emCon = $this->getDoctrine()->getManager();
                    $emCon->persist($con);
                    $emCon->flush();
                }

            }
        }

        return new Response('<html><body>Hecho</body></html>');

    }
}