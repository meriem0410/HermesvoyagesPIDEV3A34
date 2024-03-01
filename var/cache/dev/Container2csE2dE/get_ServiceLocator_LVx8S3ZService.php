<?php

namespace Container2csE2dE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LVx8S3ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lVx8S3Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lVx8S3Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AvisController::delete' => ['privates', '.service_locator.WAdf4Q1', 'get_ServiceLocator_WAdf4Q1Service', true],
            'App\\Controller\\AvisController::edit' => ['privates', '.service_locator.WAdf4Q1', 'get_ServiceLocator_WAdf4Q1Service', true],
            'App\\Controller\\AvisController::index' => ['privates', '.service_locator.T61jM.4', 'get_ServiceLocator_T61jM_4Service', true],
            'App\\Controller\\AvisController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AvisController::show' => ['privates', '.service_locator.tqKaOKq', 'get_ServiceLocator_TqKaOKqService', true],
            'App\\Controller\\AvisController::statistiques' => ['privates', '.service_locator.ClAQttN', 'get_ServiceLocator_ClAQttNService', true],
            'App\\Controller\\FrontHController::hebergementavis' => ['privates', '.service_locator.cXZ2F6I', 'get_ServiceLocator_CXZ2F6IService', true],
            'App\\Controller\\FrontHController::index' => ['privates', '.service_locator.GBMxyvu', 'get_ServiceLocator_GBMxyvuService', true],
            'App\\Controller\\FrontHController::show' => ['privates', '.service_locator.uc0Ax9j', 'get_ServiceLocator_Uc0Ax9jService', true],
            'App\\Controller\\HebergementController::delete' => ['privates', '.service_locator.g9xr56r', 'get_ServiceLocator_G9xr56rService', true],
            'App\\Controller\\HebergementController::edit' => ['privates', '.service_locator.g9xr56r', 'get_ServiceLocator_G9xr56rService', true],
            'App\\Controller\\HebergementController::index' => ['privates', '.service_locator.9bCbLIj', 'get_ServiceLocator_9bCbLIjService', true],
            'App\\Controller\\HebergementController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HebergementController::search' => ['privates', '.service_locator.GBMxyvu', 'get_ServiceLocator_GBMxyvuService', true],
            'App\\Controller\\HebergementController::show' => ['privates', '.service_locator.uc0Ax9j', 'get_ServiceLocator_Uc0Ax9jService', true],
            'App\\Controller\\ReservationController::delete' => ['privates', '.service_locator.yjYmAoZ', 'get_ServiceLocator_YjYmAoZService', true],
            'App\\Controller\\ReservationController::edit' => ['privates', '.service_locator.yjYmAoZ', 'get_ServiceLocator_YjYmAoZService', true],
            'App\\Controller\\ReservationController::index' => ['privates', '.service_locator.caJHb8S', 'get_ServiceLocator_CaJHb8SService', true],
            'App\\Controller\\ReservationController::new' => ['privates', '.service_locator.gxkSA7l', 'get_ServiceLocator_GxkSA7lService', true],
            'App\\Controller\\ReservationController::show' => ['privates', '.service_locator.h9c0uBq', 'get_ServiceLocator_H9c0uBqService', true],
            'App\\Controller\\ReservationController::userReservations' => ['privates', '.service_locator.QG2.pUf', 'get_ServiceLocator_QG2_PUfService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AvisController:delete' => ['privates', '.service_locator.WAdf4Q1', 'get_ServiceLocator_WAdf4Q1Service', true],
            'App\\Controller\\AvisController:edit' => ['privates', '.service_locator.WAdf4Q1', 'get_ServiceLocator_WAdf4Q1Service', true],
            'App\\Controller\\AvisController:index' => ['privates', '.service_locator.T61jM.4', 'get_ServiceLocator_T61jM_4Service', true],
            'App\\Controller\\AvisController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AvisController:show' => ['privates', '.service_locator.tqKaOKq', 'get_ServiceLocator_TqKaOKqService', true],
            'App\\Controller\\AvisController:statistiques' => ['privates', '.service_locator.ClAQttN', 'get_ServiceLocator_ClAQttNService', true],
            'App\\Controller\\FrontHController:hebergementavis' => ['privates', '.service_locator.cXZ2F6I', 'get_ServiceLocator_CXZ2F6IService', true],
            'App\\Controller\\FrontHController:index' => ['privates', '.service_locator.GBMxyvu', 'get_ServiceLocator_GBMxyvuService', true],
            'App\\Controller\\FrontHController:show' => ['privates', '.service_locator.uc0Ax9j', 'get_ServiceLocator_Uc0Ax9jService', true],
            'App\\Controller\\HebergementController:delete' => ['privates', '.service_locator.g9xr56r', 'get_ServiceLocator_G9xr56rService', true],
            'App\\Controller\\HebergementController:edit' => ['privates', '.service_locator.g9xr56r', 'get_ServiceLocator_G9xr56rService', true],
            'App\\Controller\\HebergementController:index' => ['privates', '.service_locator.9bCbLIj', 'get_ServiceLocator_9bCbLIjService', true],
            'App\\Controller\\HebergementController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HebergementController:search' => ['privates', '.service_locator.GBMxyvu', 'get_ServiceLocator_GBMxyvuService', true],
            'App\\Controller\\HebergementController:show' => ['privates', '.service_locator.uc0Ax9j', 'get_ServiceLocator_Uc0Ax9jService', true],
            'App\\Controller\\ReservationController:delete' => ['privates', '.service_locator.yjYmAoZ', 'get_ServiceLocator_YjYmAoZService', true],
            'App\\Controller\\ReservationController:edit' => ['privates', '.service_locator.yjYmAoZ', 'get_ServiceLocator_YjYmAoZService', true],
            'App\\Controller\\ReservationController:index' => ['privates', '.service_locator.caJHb8S', 'get_ServiceLocator_CaJHb8SService', true],
            'App\\Controller\\ReservationController:new' => ['privates', '.service_locator.gxkSA7l', 'get_ServiceLocator_GxkSA7lService', true],
            'App\\Controller\\ReservationController:show' => ['privates', '.service_locator.h9c0uBq', 'get_ServiceLocator_H9c0uBqService', true],
            'App\\Controller\\ReservationController:userReservations' => ['privates', '.service_locator.QG2.pUf', 'get_ServiceLocator_QG2_PUfService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AvisController::delete' => '?',
            'App\\Controller\\AvisController::edit' => '?',
            'App\\Controller\\AvisController::index' => '?',
            'App\\Controller\\AvisController::new' => '?',
            'App\\Controller\\AvisController::show' => '?',
            'App\\Controller\\AvisController::statistiques' => '?',
            'App\\Controller\\FrontHController::hebergementavis' => '?',
            'App\\Controller\\FrontHController::index' => '?',
            'App\\Controller\\FrontHController::show' => '?',
            'App\\Controller\\HebergementController::delete' => '?',
            'App\\Controller\\HebergementController::edit' => '?',
            'App\\Controller\\HebergementController::index' => '?',
            'App\\Controller\\HebergementController::new' => '?',
            'App\\Controller\\HebergementController::search' => '?',
            'App\\Controller\\HebergementController::show' => '?',
            'App\\Controller\\ReservationController::delete' => '?',
            'App\\Controller\\ReservationController::edit' => '?',
            'App\\Controller\\ReservationController::index' => '?',
            'App\\Controller\\ReservationController::new' => '?',
            'App\\Controller\\ReservationController::show' => '?',
            'App\\Controller\\ReservationController::userReservations' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AvisController:delete' => '?',
            'App\\Controller\\AvisController:edit' => '?',
            'App\\Controller\\AvisController:index' => '?',
            'App\\Controller\\AvisController:new' => '?',
            'App\\Controller\\AvisController:show' => '?',
            'App\\Controller\\AvisController:statistiques' => '?',
            'App\\Controller\\FrontHController:hebergementavis' => '?',
            'App\\Controller\\FrontHController:index' => '?',
            'App\\Controller\\FrontHController:show' => '?',
            'App\\Controller\\HebergementController:delete' => '?',
            'App\\Controller\\HebergementController:edit' => '?',
            'App\\Controller\\HebergementController:index' => '?',
            'App\\Controller\\HebergementController:new' => '?',
            'App\\Controller\\HebergementController:search' => '?',
            'App\\Controller\\HebergementController:show' => '?',
            'App\\Controller\\ReservationController:delete' => '?',
            'App\\Controller\\ReservationController:edit' => '?',
            'App\\Controller\\ReservationController:index' => '?',
            'App\\Controller\\ReservationController:new' => '?',
            'App\\Controller\\ReservationController:show' => '?',
            'App\\Controller\\ReservationController:userReservations' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
