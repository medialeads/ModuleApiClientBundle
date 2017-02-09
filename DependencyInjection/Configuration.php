<?php

namespace Module\ApiClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('module_api_client');

        $rootNode
            ->children()
                ->scalarNode('base_url')->cannotBeEmpty()->isRequired()->end()
                ->arrayNode('module_contact')
                    ->children()
                        ->scalarNode('encryption_key')->defaultValue('hunter2')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
