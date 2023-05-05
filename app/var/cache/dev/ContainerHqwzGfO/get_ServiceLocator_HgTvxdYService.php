<?php

namespace ContainerHqwzGfO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HgTvxdYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HgTvxdY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HgTvxdY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'StageRepository' => ['privates', 'App\\Repository\\StageRepository', 'getStageRepositoryService', true],
        ], [
            'StageRepository' => 'App\\Repository\\StageRepository',
        ]);
    }
}
