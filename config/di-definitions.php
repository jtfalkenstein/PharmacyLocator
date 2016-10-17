<?php

use PharmacyLocator\ConfigManager\ConfigManager;
use PharmacyLocator\ConfigManager\IConfigManager;
use PharmacyLocator\Repository\IPharmacyRepo;
use PharmacyLocator\Repository\SqlitePharmacyRepo;
use PharmacyLocator\Responses\IResponseSerializer;
use PharmacyLocator\Responses\JsonResponseSerializer;
use function DI\object;

/*
 * This is the definition file used by PHP-DI for dependency injection.
 * Not all dependencies were injected in this application, only the ones
 * that conceivably might need to change based upon business needs.
 * 
 * The repository could be configured to use a different db technology.
 * The config manager could be something altogether different, if needed.
 * And the response serializer could be changed to output xml or some other
 * serialized format other than json, if needed.
 */


return [
    IPharmacyRepo::class => object(SqlitePharmacyRepo::class),
    IConfigManager::class => object(ConfigManager::class),
    IResponseSerializer::class => object(JsonResponseSerializer::class)
];