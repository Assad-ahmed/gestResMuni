<?php

namespace ContainerSLxvSq8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4O4FfiXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4O4FfiX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4O4FfiX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'registry' => '?',
        ]);
    }
}
