<?php

namespace ContainerXEKI5Hm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImpotCFNPBControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ImpotCFNPBController' shared autowired service.
     *
     * @return \App\Controller\ImpotCFNPBController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ImpotCFNPBController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Ressources'.\DIRECTORY_SEPARATOR.'CfnpbService.php';

        $container->services['App\\Controller\\ImpotCFNPBController'] = $instance = new \App\Controller\ImpotCFNPBController(new \App\Service\Ressources\CfnpbService(($container->privates['App\\Repository\\ImpotCFNPBRepository'] ?? $container->load('getImpotCFNPBRepositoryService')), ($container->privates['App\\Repository\\ProprieteRepository'] ?? $container->load('getProprieteRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ImpotCFNPBController', $container));

        return $instance;
    }
}
