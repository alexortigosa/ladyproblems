<?php
/**
 * Created by PhpStorm.
 * User: alexandreortigosa
 * Date: 22/12/2016
 * Time: 12:04
 */

namespace Alex\StaticPagesBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        // TODO: Implement getConfigTreeBuilder() method.
        $treeBuilder = new TreeBuilder();

        $treeBuilder
            ->root('alex_staticpages')
            ->children()
            ->scalarNode('account_sync')->isRequired()->cannotBeEmpty()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}