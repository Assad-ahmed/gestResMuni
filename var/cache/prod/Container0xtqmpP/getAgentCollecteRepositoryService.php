<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAgentCollecteRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AgentCollecteRepository' shared autowired service.
     *
     * @return \App\Repository\AgentCollecteRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AgentCollecteRepository'] = new \App\Repository\AgentCollecteRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
