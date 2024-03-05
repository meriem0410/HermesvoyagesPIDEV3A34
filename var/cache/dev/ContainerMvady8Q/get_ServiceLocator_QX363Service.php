<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QX363Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._qX3_63' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._qX3_63'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'avi' => ['privates', '.errored.xy7krWQ', NULL, 'Cannot determine controller argument for "App\\Controller\\AvisController::edit()": the $avi argument is type-hinted with the non-existent class or interface: "App\\Entity\\Avis".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'avi' => '?',
            'entityManager' => '?',
        ]);
    }
}