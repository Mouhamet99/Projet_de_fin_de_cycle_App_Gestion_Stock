<?php

namespace ContainerR9eHRSW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KLlpLJZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kLlpLJZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kLlpLJZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'medRepo' => ['privates', 'App\\Repository\\MedicamentRepository', 'getMedicamentRepositoryService', true],
        ], [
            'medRepo' => 'App\\Repository\\MedicamentRepository',
        ]);
    }
}
