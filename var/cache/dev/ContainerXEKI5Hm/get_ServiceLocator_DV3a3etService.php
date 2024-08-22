<?php

namespace ContainerXEKI5Hm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DV3a3etService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DV3a3et' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DV3a3et'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contributeur' => ['privates', '.errored..service_locator.DV3a3et.App\\Entity\\Contributeurs', NULL, 'Cannot autowire service ".service_locator.DV3a3et": it references class "App\\Entity\\Contributeurs" but no such service exists.'],
            'paiementRepo' => ['privates', 'App\\Repository\\PaiementRepository', 'getPaiementRepositoryService', true],
        ], [
            'contributeur' => 'App\\Entity\\Contributeurs',
            'paiementRepo' => 'App\\Repository\\PaiementRepository',
        ]);
    }
}