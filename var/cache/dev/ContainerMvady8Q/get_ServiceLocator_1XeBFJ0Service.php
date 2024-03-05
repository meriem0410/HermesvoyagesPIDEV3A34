<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1XeBFJ0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1XeBFJ0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1XeBFJ0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'billet' => ['privates', '.errored..service_locator.1XeBFJ0.App\\Entity\\Billet', NULL, 'Cannot autowire service ".service_locator.1XeBFJ0": it needs an instance of "App\\Entity\\Billet" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'billet' => 'App\\Entity\\Billet',
            'entityManager' => '?',
        ]);
    }
}
