<?php

namespace PharmacyLocator\Bootstrapper;

use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;
use PharmacyLocator\Application\Application;
use const DS;
use const ROOT;

/**
 * Initializes the DI-container and then runs the application.
 *
 * @author jfalkenstein
 */
class Bootstrapper {
    public static function boot(){
        $container = SELF::getDIContainer();
        $app = $container->get(Application::class);
        $app->run();
    }
    
    /**
     * Creates the dependency injection container, using PHP-DI
     * @return ContainerInterface
     */
    private static function getDIContainer(): ContainerInterface{
        $builder = new ContainerBuilder();
        $builder->addDefinitions(include implode(DS, [ROOT, 'config', 'di-definitions.php']));
        return $builder->build();
    }
}
