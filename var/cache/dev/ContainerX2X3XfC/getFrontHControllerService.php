<?php

namespace ContainerX2X3XfC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFrontHControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FrontHController' shared autowired service.
     *
     * @return \App\Controller\FrontHController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'FrontHController.php';

        $container->services['App\\Controller\\FrontHController'] = $instance = new \App\Controller\FrontHController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\FrontHController', $container));

        return $instance;
    }
}
