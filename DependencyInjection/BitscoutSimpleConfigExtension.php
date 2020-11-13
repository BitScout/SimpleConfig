<?php


namespace Bitscout\SimpleConfig\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class BitscoutSimpleConfigExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $this->configureVarLoader($config, $container);
    }

    public function configureVarLoader(array $config, ContainerBuilder $container): void {
        dump($config);

        $container
            ->findDefinition('bitscout_simple_config.dependency_injection.env_var_loader')
            ->replaceArgument(0, $config['fields']);
    }
}