<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PI_GYUPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pI.GYUP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pI.GYUP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evenement' => ['privates', '.errored..service_locator.pI.GYUP.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.pI.GYUP": it needs an instance of "App\\Entity\\Evenement" but this type has been excluded in "config/services.yaml".'],
            'evenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
            'evenementRepository' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}
