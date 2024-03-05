<?php

namespace ContainerX2X3XfC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XVpCUtBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XVpCUtB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XVpCUtB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'EvenementRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
            'Normalizer' => ['privates', '.errored.iQo5pPx', NULL, 'Cannot determine controller argument for "App\\Controller\\EvenementController::search()": the $Normalizer argument is type-hinted with the non-existent class or interface: "Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface".'],
        ], [
            'EvenementRepository' => 'App\\Repository\\EvenementRepository',
            'Normalizer' => '?',
        ]);
    }
}
