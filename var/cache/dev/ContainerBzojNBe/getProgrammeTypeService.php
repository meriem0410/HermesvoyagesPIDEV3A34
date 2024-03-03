<?php

namespace ContainerBzojNBe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProgrammeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProgrammeType' shared autowired service.
     *
     * @return \App\Form\ProgrammeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProgrammeType.php';

        return $container->privates['App\\Form\\ProgrammeType'] = new \App\Form\ProgrammeType();
    }
}
