<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImpotCFNPBRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ImpotCFNPBRepository' shared autowired service.
     *
     * @return \App\Repository\ImpotCFNPBRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ImpotCFNPBRepository'] = new \App\Repository\ImpotCFNPBRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
