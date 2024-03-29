<?php

namespace ContainerMvady8Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C7g0zRpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c7g0zRp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c7g0zRp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'HebergementRepository' => ['privates', 'App\\Repository\\HebergementRepository', 'getHebergementRepositoryService', true],
            'avisRepository' => ['privates', '.errored.h81vQDO', NULL, 'Cannot determine controller argument for "App\\Controller\\HebergementController::search()": the $avisRepository argument is type-hinted with the non-existent class or interface: "App\\Repository\\AvisRepository".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
        ], [
            'HebergementRepository' => 'App\\Repository\\HebergementRepository',
            'avisRepository' => '?',
            'entityManager' => '?',
            'logger' => '?',
        ]);
    }
}
