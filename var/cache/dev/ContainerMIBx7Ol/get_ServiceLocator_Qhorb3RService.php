<?php

namespace ContainerMIBx7Ol;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qhorb3RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qhorb3R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qhorb3R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'programme' => ['privates', '.errored..service_locator.qhorb3R.App\\Entity\\Programme', NULL, 'Cannot autowire service ".service_locator.qhorb3R": it needs an instance of "App\\Entity\\Programme" but this type has been excluded in "config/services.yaml".'],
        ], [
            'programme' => 'App\\Entity\\Programme',
        ]);
    }
}
