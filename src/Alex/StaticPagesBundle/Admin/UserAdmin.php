<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/12/2016
 * Time: 19:32
 */

namespace Alex\StaticPagesBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;


class UserAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', null, array(
                'label' => 'Nombre de Usuario'
            ))
            ->add('email', null, array(
                'label' => 'Email'
            ))
            ->add('password', null, array(
                'label' => 'Pass'
            ))
            ->add('twitname', null, array(
                'label' => 'Twitter account'
            ))
            ->add('roles', null, array(
                'label' => 'Roles'
            ))

            // if no type is specified, SonataAdminBundle tries to guess it
            //->add('body')

            // ...
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('username')
            ->add('email')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('username')
            ->add('email')
        ;
    }
}