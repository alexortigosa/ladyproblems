<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/12/2016
 * Time: 19:48
 */

namespace Alex\StaticPagesBundle\Controller;



use Alex\StaticPagesBundle\Entity\Contact;
use Alex\StaticPagesBundle\Entity\Servicio;
use Alex\StaticPagesBundle\Form\SolicitudType;
use Alex\StaticPagesBundle\Utils\Utils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserController extends Controller
{
    private $horas = array(
        '00:00'=>'0',
        '01:00'=>'1',
        '02:00'=>'2',
        '03:00'=>'3',
        '04:00'=>'4',
        '05:00'=>'5',
        '06:00'=>'6',
        '07:00'=>'7',
        '08:00'=>'8',
        '09:00'=>'9',
        '10:00'=>'10',
        '11:00'=>'11',
        '12:00'=>'12',
        '13:00'=>'13',
        '14:00'=>'14',
        '15:00'=>'15',
        '16:00'=>'16',
        '17:00'=>'17',
        '18:00'=>'18',
        '19:00'=>'19',
        '20:00'=>'20',
        '21:00'=>'21',
        '22:00'=>'22',
        '23:00'=>'23',
    );

    public function muestraServiciosAction(){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $peticiones=$this->getDoctrine()->getRepository('AlexStaticPagesBundle:Servicio')->findAll();

        return $this->render('@AlexStaticPages/User/peticiones.html.twig', array(
            'user' => $user,
            'peticiones' => $peticiones,
        ));


    }

    public function asignarteguntwitAction(){




    }
    public function serviciosAction(){
        return $this->render('@AlexStaticPages/Servicios/servicios.html.twig');
    }
    public function solicitarAction(Request $request){
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
            ->add('dia', ChoiceType::class, array(
                'label' => 'Dia',
                'choices' => array(
                    'Lunes' => 'Lunes',
                    'Martes' => 'Martes',
                    'Miercoles' => 'Miercoles',
                    'Jueves' => 'Jueves',
                    'Viernes' => 'Viernes',
                    'Sabado' => 'Sabado',
                    'Domingo' => 'Domingo'
                ),
                'preferred_choices' => 'Lunes'
            ))
            ->add('diaini', ChoiceType::class, array(
                'label' => 'Hora de Inicio',
                'choices' => $this->horas,
                'preferred_choices' => '8'
            ))
            ->add('diafin', ChoiceType::class, array(
                'label' => 'Hora de Fin',
                'choices' => $this->horas,
                'preferred_choices' => '8'
            ))
            ->add('diaini2', ChoiceType::class, array(
                'label' => 'Hora de Inicio',
                'choices' => $this->horas,
                'preferred_choices' => '8'
            ))
            ->add('diafin2', ChoiceType::class, array(
                'label' => 'Hora de Inicio',
                'choices' => $this->horas,
                'preferred_choices' => '8'
            ))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
        }
        return $this->render('@AlexStaticPages/Servicios/solicitar.html.twig',
            array(
                "form" => $form->createView())
        );
    }
}