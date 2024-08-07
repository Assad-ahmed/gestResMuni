<?php

namespace Container0xtqmpP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_UserAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.user_authenticator' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\UserAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.user_authenticator'] = new \Symfony\Bundle\SecurityBundle\Security\UserAuthenticator(($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService()), new \Symfony\Component\DependencyInjection\ServiceLocator(['main' => function () use ($container) {
            return ($container->privates['security.authenticator.manager.main'] ?? $container->load('getSecurity_Authenticator_Manager_MainService'));
        }]), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
