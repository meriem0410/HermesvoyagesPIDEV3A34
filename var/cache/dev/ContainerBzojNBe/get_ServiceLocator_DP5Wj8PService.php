<?php

namespace ContainerBzojNBe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DP5Wj8PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DP5Wj8P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DP5Wj8P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            're' => ['privates', '.errored..service_locator.DP5Wj8P.App\\Entity\\Res', NULL, 'Cannot autowire service ".service_locator.DP5Wj8P": it needs an instance of "App\\Entity\\Res" but this type has been excluded in "config/services.yaml".'],
        ], [
            're' => 'App\\Entity\\Res',
        ]);
    }
}
