<?php

namespace ContainerX2X3XfC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PrvYl7vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.prvYl7v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.prvYl7v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'HebergementRepository' => ['privates', 'App\\Repository\\HebergementRepository', 'getHebergementRepositoryService', true],
            'avisRepository' => ['privates', 'App\\Repository\\AvisRepository', 'getAvisRepositoryService', true],
        ], [
            'HebergementRepository' => 'App\\Repository\\HebergementRepository',
            'avisRepository' => 'App\\Repository\\AvisRepository',
        ]);
    }
}
