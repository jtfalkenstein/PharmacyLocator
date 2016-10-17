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
        //Global exception handler
        try{
            $container = $this->getDIContainer();
            $app = $container->get(Application::class);
            $app->run();
        } catch (Exception $ex) {
            //Do something about it here...
        }
    }
    
    
    private static function getDIContainer(): ContainerInterface{
        $builder = new ContainerBuilder();
        $builder->addDefinitions(include ROOT . DS . 'config' . DS . 'di-definitions.php');
        return $builder->build();
    }
}
