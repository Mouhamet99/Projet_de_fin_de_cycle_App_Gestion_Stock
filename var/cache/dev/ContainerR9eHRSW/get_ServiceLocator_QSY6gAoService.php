<?php

namespace ContainerR9eHRSW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QSY6gAoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qSY6gAo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qSY6gAo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fournisseur' => ['privates', '.errored..service_locator.qSY6gAo.App\\Entity\\Fournisseur', NULL, 'Cannot autowire service ".service_locator.qSY6gAo": it references class "App\\Entity\\Fournisseur" but no such service exists.'],
        ], [
            'fournisseur' => 'App\\Entity\\Fournisseur',
        ]);
    }
}