<?php

namespace Module\ApiClientBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ModuleApiClientExtension extends Extension
{
    /**
     * @param array $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $requiredBundles = array(
            'LswApiCallerBundle',
            'ModuleApiCommonBundle',
            'MisdPhoneNumberBundle'
        );
        $bundles = $container->getParameter('kernel.bundles');
        foreach ($requiredBundles as $requiredBundle) {
            if (!isset($bundles[$requiredBundle])) {
                throw new \Exception();
            }
        }

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('api_caller.yml');
        $loader->load('client.yml');
        $loader->load('helper.yml');
        $loader->load('module_contact.yml');
        $loader->load('module_information.yml');
        $loader->load('module_menu.yml');
        $loader->load('module_page.yml');
        $loader->load('module_quote_history.yml');
        $loader->load('module_slider.yml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->getDefinition('module_api_client.helper.api')->addArgument($config['base_url']);

        $container->getDefinition('module_api_client.module_contact.helper')->addArgument($config['module_contact']['encryption_key']);
    }
}
