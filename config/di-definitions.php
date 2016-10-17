<?php

use PharmacyLocator\ConfigManager\ConfigManager;
use PharmacyLocator\ConfigManager\IConfigManager;
use PharmacyLocator\Repository\IPharmacyRepo;
use PharmacyLocator\Repository\SqlitePharmacyRepo;
use PharmacyLocator\Responses\IResponseSerializer;
use PharmacyLocator\Responses\JsonResponseSerializer;
use function DI\object;
return [
    IPharmacyRepo::class => object(SqlitePharmacyRepo::class),
    IConfigManager::class => object(ConfigManager::class),
    IResponseSerializer::class => object(JsonResponseSerializer::class)
];