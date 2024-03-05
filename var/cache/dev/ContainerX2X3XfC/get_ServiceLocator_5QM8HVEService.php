<?php

namespace ContainerX2X3XfC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5QM8HVEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5QM8HVE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5QM8HVE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'voypersonalise' => ['privates', '.errored..service_locator.5QM8HVE.App\\Entity\\Voypersonalise', NULL, 'Cannot autowire service ".service_locator.5QM8HVE": it needs an instance of "App\\Entity\\Voypersonalise" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'voypersonalise' => 'App\\Entity\\Voypersonalise',
        ]);
    }
}
