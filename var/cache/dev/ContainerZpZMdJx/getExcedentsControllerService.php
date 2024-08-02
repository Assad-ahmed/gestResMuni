<?php

namespace ContainerZpZMdJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExcedentsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ExcedentsController' shared autowired service.
     *
     * @return \App\Controller\ExcedentsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ExcedentsController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ExcedentsService.php';

        $container->services['App\\Controller\\ExcedentsController'] = $instance = new \App\Controller\ExcedentsController(new \App\Service\ExcedentsService(($container->privates['App\\Repository\\ExcedentsRepository'] ?? $container->load('getExcedentsRepositoryService')), ($container->privates['App\\Repository\\ProprieteRepository'] ?? $container->load('getProprieteRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ExcedentsController', $container));

        return $instance;
    }
}
