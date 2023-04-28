<?php

namespace ContainerQCWYrCa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCollectionConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CollectionConfigurator.php';

        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $container->getEntityFactoryService());

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $a, ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory'] ?? $container->getControllerFactoryService()));
    }
}
