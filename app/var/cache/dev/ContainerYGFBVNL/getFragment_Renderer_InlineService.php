<?php

namespace ContainerYGFBVNL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_Renderer_InlineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php';

        $a = ($container->services['http_kernel'] ?? $container->getHttpKernelService());

        if (isset($container->privates['fragment.renderer.inline'])) {
            return $container->privates['fragment.renderer.inline'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['fragment.renderer.inline'])) {
            return $container->privates['fragment.renderer.inline'];
        }

        $container->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($a, $b);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }
}
