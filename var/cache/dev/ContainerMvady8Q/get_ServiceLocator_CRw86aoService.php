<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CRw86aoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cRw86ao' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cRw86ao'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'voyage' => ['privates', '.errored..service_locator.cRw86ao.App\\Entity\\Voyage', NULL, 'Cannot autowire service ".service_locator.cRw86ao": it needs an instance of "App\\Entity\\Voyage" but this type has been excluded in "config/services.yaml".'],
        ], [
            'voyage' => 'App\\Entity\\Voyage',
        ]);
    }
}
