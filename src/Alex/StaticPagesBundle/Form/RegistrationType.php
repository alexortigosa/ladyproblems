<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 17/12/2016
 * Time: 01:35
 */

namespace Alex\StaticPagesBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('sexo', ChoiceType::class, array(
            'choices' => array(
                'Male' => 'H',
                'Female' => 'M',
            ),
        ))->add('edad')
            ->add('numhijos');

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }

}