<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 14/10/2016
 * Time: 17:40
 */

namespace Alex\StaticPagesBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Nombre',
                'attr' => array(
                    'placeholder' => 'Nombre'
                )
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