<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeImpotsRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TypeImpotsRepository' shared autowired service.
     *
     * @return \App\Repository\TypeImpotsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TypeImpotsRepository'] = new \App\Repository\TypeImpotsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
