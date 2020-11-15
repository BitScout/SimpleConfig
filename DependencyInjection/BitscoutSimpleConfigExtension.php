<?php


namespace Bitscout\SimpleConfig\DependencyInjection;

use Sonata\AdminBundle\SonataAdminBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class BitscoutSimpleConfigExtension
 *
 * @author Christian Kollross
 */
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
        $this->configureSonataAdmin($loader);
    }

    public function configureVarLoader(array $config, ContainerBuilder $container): void {
        $container
            ->findDefinition('bitscout_simple_config.dependency_injection.env_var_loader')
            ->replaceArgument(0, $config['fields']);
    }

    /**
     * @throws \LogicException
     */
    private function configureSonataAdmin(XmlFileLoader $loader): void
    {
        if (!class_exists(SonataAdminBundle::class)) {
            throw new \LogicException('Please install sonata-project/admin-bundle');
        }

        $loader->load('sonata_admin.xml');
    }
}