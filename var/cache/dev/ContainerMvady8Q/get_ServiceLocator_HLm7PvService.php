<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HLm7PvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HLm7Pv_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HLm7Pv_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Hebergement' => ['privates', '.errored..service_locator.HLm7Pv_.App\\Entity\\Hebergement', NULL, 'Cannot autowire service ".service_locator.HLm7Pv_": it needs an instance of "App\\Entity\\Hebergement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'Hebergement' => 'App\\Entity\\Hebergement',
        ]);
    }
}
