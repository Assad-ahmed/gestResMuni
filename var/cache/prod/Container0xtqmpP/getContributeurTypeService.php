<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContributeurTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ContributeurType' shared autowired service.
     *
     * @return \App\Form\ContributeurType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ContributeurType'] = new \App\Form\ContributeurType();
    }
}
