<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.9iY6CBE' shared service.

return $this->privates['.service_locator.9iY6CBE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\HomeController::testForm' => ['privates', '.service_locator.Z_.o95M', 'get_ServiceLocator_Z_O95MService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\HomeController:testForm' => ['privates', '.service_locator.Z_.o95M', 'get_ServiceLocator_Z_O95MService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
], [
    'App\\Controller\\HomeController::testForm' => '?',
    'App\\Controller\\SecurityController::login' => '?',
    'App\\Controller\\HomeController:testForm' => '?',
    'App\\Controller\\SecurityController:login' => '?',
]);
