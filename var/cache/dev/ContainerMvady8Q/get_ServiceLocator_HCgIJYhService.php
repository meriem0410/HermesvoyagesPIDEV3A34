<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HCgIJYhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HCgIJYh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HCgIJYh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'billet' => ['privates', '.errored..service_locator.HCgIJYh.App\\Entity\\Billet', NULL, 'Cannot autowire service ".service_locator.HCgIJYh": it needs an instance of "App\\Entity\\Billet" but this type has been excluded in "config/services.yaml".'],
        ], [
            'billet' => 'App\\Entity\\Billet',
        ]);
    }
}
