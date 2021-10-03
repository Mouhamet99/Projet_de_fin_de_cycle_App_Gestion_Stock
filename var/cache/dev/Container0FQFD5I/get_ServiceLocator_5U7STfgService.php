<?php

namespace Container0FQFD5I;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5U7STfgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5U7STfg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5U7STfg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fourRepo' => ['privates', 'App\\Repository\\FournisseurRepository', 'getFournisseurRepositoryService', true],
        ], [
            'fourRepo' => 'App\\Repository\\FournisseurRepository',
        ]);
    }
}