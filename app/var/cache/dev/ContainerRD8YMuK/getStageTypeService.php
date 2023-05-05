<?php

namespace ContainerRD8YMuK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStageTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\StageType' shared autowired service.
     *
     * @return \App\Form\StageType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/StageType.php';

        return $container->privates['App\\Form\\StageType'] = new \App\Form\StageType();
    }
}
