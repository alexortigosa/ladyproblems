<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 15/12/2016
 * Time: 15:26
 */

namespace Alex\StaticPagesBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class ConsumicionAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('fecha', 'date', array(
                'label' => 'Fecha de consumición'
            ))
            ->add('usuario', null, array(
                'label' => 'Usuario'
            ))
            ->add('sorteo', null, array(
                'label' => 'Sorteo'
            ))
            ->add('articulo', null, array(
                'label' => 'Articulo'
            ))
            ->add('ganador', null, array(
                'label' => 'Es ganador?'
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
            ->add('fecha')
            ->add('articulo')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('fecha')
            ->add('sorteo')
            ->add('usuario')
            ->add('articulo')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('fecha')
            ->add('articulo')
        ;
    }
}