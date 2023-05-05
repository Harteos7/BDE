<?php

namespace ContainerYGFBVNL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBaseCControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BaseCController' shared autowired service.
     *
     * @return \App\Controller\BaseCController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseCController.php';

        $container->services['App\\Controller\\BaseCController'] = $instance = new \App\Controller\BaseCController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\BaseCController', $container));

        return $instance;
    }
}
