<?php

namespace ContainerSLxvSq8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PGTRxNNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PGTRxNN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PGTRxNN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'registry' => '?',
        ]);
    }
}
