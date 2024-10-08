<?php

namespace ContainerXEKI5Hm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPatenteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PatenteController' shared autowired service.
     *
     * @return \App\Controller\PatenteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PatenteController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Ressources'.\DIRECTORY_SEPARATOR.'PatenteService.php';

        $container->services['App\\Controller\\PatenteController'] = $instance = new \App\Controller\PatenteController(new \App\Service\Ressources\PatenteService(($container->privates['App\\Repository\\PatenteRepository'] ?? $container->load('getPatenteRepositoryService')), ($container->privates['App\\Repository\\ProprieteRepository'] ?? $container->load('getProprieteRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\PatenteController', $container));

        return $instance;
    }
}
