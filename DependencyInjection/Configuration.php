<?php

namespace Bitscout\SimpleConfig\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    const FIELD_DEFAULT = 'default';

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('bitscout_simple_config');
        $rootNode    = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->arrayNode('fields')
                    ->arrayPrototype()
                        ->children()
                            ->scalarNode('label')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode('type')->isRequired()->cannotBeEmpty()->end()
                            ->scalarNode(static::FIELD_DEFAULT)->cannotBeEmpty()->end()
                            ->booleanNode('show')->defaultTrue()->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}