<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vxqkg42Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.vxqkg42' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vxqkg42'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ressource' => ['privates', '.errored..service_locator.vxqkg42.App\\Entity\\Ressource', NULL, 'Cannot autowire service ".service_locator.vxqkg42": it references class "App\\Entity\\Ressource" but no such service exists.'],
        ], [
            'ressource' => 'App\\Entity\\Ressource',
        ]);
    }
}
