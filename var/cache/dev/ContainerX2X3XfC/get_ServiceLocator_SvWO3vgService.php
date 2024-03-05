<?php

namespace ContainerX2X3XfC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SvWO3vgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SvWO3vg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SvWO3vg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            're' => ['privates', '.errored..service_locator.SvWO3vg.App\\Entity\\Res', NULL, 'Cannot autowire service ".service_locator.SvWO3vg": it needs an instance of "App\\Entity\\Res" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            're' => 'App\\Entity\\Res',
        ]);
    }
}
