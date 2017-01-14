<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 22/12/2016
 * Time: 12:32
 */

namespace Alex\StaticPagesBundle\Utils;

use Alex\StaticPagesBundle\Entity\Consumicion;
use Alex\StaticPagesBundle\Entity\Contact;
use Alex\StaticPagesBundle\Entity\Sorteo;
use Alex\StaticPagesBundle\Utils\Utils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class SyncroTwitterStrategy implements ISyncroStrategy
{


    public function syncroParticipaciones($account,$container)
    {
        // TODO: Implement syncroParticipaciones() method.
        $twitter = $container->get('alex_custom.twitter');


        // Or retrieve the timeline using the generic query method
        $response = $twitter->query('search/tweets', 'GET', 'json',array(
            "q" => $account
        ));
        $tweets = json_decode($response->getContent());
        $users=Utils::getUsersAndDates($tweets);

        $em=$container->get('doctrine')->getRepository('AlexStaticPagesBundle:User');
        $emConsumicion=$container->get('doctrine')->getRepository('AlexStaticPagesBundle:Consumicion');
        $emSorteo=$container->get('doctrine')->getRepository('AlexStaticPagesBundle:Sorteo');

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
                    $emCon = $container->get('doctrine')->getManager();
                    $emCon->persist($con);
                    $emCon->flush();
                }

            }
        }
    }
}