<?php

namespace ContainerZpZMdJx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxeRuraleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TaxeRuraleController' shared autowired service.
     *
     * @return \App\Controller\TaxeRuraleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TaxeRuraleController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ImpotCapitation'.\DIRECTORY_SEPARATOR.'TaxeRuraleService.php';

        $container->services['App\\Controller\\TaxeRuraleController'] = $instance = new \App\Controller\TaxeRuraleController(new \App\Service\ImpotCapitation\TaxeRuraleService(($container->privates['App\\Repository\\TaxeRuraleRepository'] ?? $container->load('getTaxeRuraleRepositoryService')), ($container->privates['App\\Repository\\ProprieteRepository'] ?? $container->load('getProprieteRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\TaxeRuraleController', $container));

        return $instance;
    }
}