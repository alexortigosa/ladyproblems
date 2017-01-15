<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/01/2017
 * Time: 02:05
 */

namespace Alex\StaticPagesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SolicitudType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', ChoiceType::class, array(
                'label' => 'Dia',

                'choices' => array(
                    'Lunes' => 'H',
                    'Mujer' => 'M',
                ),
                'preferred_choices' => 'M'
            ))
            ->add('mail', TextType::class, array(
                'label' => 'Email',
                'attr' => array(
                    'placeholder' => 'Email'
                )
            ))
            ->add('telefono',TextType::class, array(
                'label' => 'Telefono',
                'attr' => array(
                    'placeholder' => 'Telefono'
                )
            ))
            ->add('comment',TextareaType::class, array(
                'label' => 'Comentarios',
                'attr' => array(
                    'placeholder' => 'Comentarios'
                )
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Enviar formulario',
                'attr' => array(
                    'class' => 'btn-primary'
                )
            ));
    }
}