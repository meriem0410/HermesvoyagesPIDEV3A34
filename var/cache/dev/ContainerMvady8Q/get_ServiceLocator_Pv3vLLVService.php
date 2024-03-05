<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pv3vLLVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pv3vLLV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pv3vLLV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'HebergementRepository' => ['privates', 'App\\Repository\\HebergementRepository', 'getHebergementRepositoryService', true],
            'avisRepository' => ['privates', '.errored.CSGpYFP', NULL, 'Cannot determine controller argument for "App\\Controller\\AvisController::statistiques()": the $avisRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\AvisRepository".'],
        ], [
            'HebergementRepository' => 'App\\Repository\\HebergementRepository',
            'avisRepository' => '?',
        ]);
    }
}
