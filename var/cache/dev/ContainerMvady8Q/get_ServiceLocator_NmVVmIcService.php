<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NmVVmIcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NmVVmIc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NmVVmIc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'voypersonaliseRepository' => ['privates', 'App\\Repository\\VoypersonaliseRepository', 'getVoypersonaliseRepositoryService', true],
        ], [
            'voypersonaliseRepository' => 'App\\Repository\\VoypersonaliseRepository',
        ]);
    }
}
