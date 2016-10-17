<?php

namespace PharmacyLocator\Bootstrapper;

use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;
use PharmacyLocator\Application\Application;
use const DS;
use const ROOT;

/**
 * Initializes the DI-container and prepares the Application for running.
 *
 * @author jfalkenstein
 */
class Bootstrapper {
    public static function boot(){
        $container = $this->getDIContainer();
        $app = $container->get(Application::class);
        $app->run();
    }
    
    
    private static function getDIContainer(): ContainerInterface{
        $builder = new ContainerBuilder();
        $builder->addDefinitions(include ROOT . DS . 'config' . DS . 'di-definitions.php');
        return $builder->build();
    }
}
