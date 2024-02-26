<?php

namespace ContainerWGTtENf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ResType' shared autowired service.
     *
     * @return \App\Form\ResType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ResType.php';

        return $container->privates['App\\Form\\ResType'] = new \App\Form\ResType();
    }
}