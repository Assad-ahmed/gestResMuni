<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImpotTOMRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ImpotTOMRepository' shared autowired service.
     *
     * @return \App\Repository\ImpotTOMRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ImpotTOMRepository'] = new \App\Repository\ImpotTOMRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
