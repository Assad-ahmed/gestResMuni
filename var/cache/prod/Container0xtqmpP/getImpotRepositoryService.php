<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImpotRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ImpotRepository' shared autowired service.
     *
     * @return \App\Repository\ImpotRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ImpotRepository'] = new \App\Repository\ImpotRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
