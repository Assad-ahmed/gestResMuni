<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExcedentControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ControllerRessources\ExcedentController' shared autowired service.
     *
     * @return \App\Controller\ControllerRessources\ExcedentController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ControllerRessources\\ExcedentController'] = $instance = new \App\Controller\ControllerRessources\ExcedentController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ControllerRessources\\ExcedentController', $container));

        return $instance;
    }
}