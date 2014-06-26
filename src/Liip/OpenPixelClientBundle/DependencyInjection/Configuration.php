<?php

namespace Liip\OpenPixelClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('liip_open_pixel_client');

        $rootNode
            ->children()
            ->arrayNode('servers')
                ->prototype('array')
                    ->children()
                        ->scalarNode('host')->end()
                        ->integerNode('port')->end()
                    ->end()
                ->end()
            ->end()
            ->variableNode('pixelmap')
            ->end()
            ->end();

        return $treeBuilder;
    }
}
