<?php

use PharmacyLocator\ConfigManager\ConfigManager;
use PharmacyLocator\ConfigManager\IConfigManager;
use PharmacyLocator\Repository\IPharmacyRepo;
use PharmacyLocator\Repository\SqlitePharmacyRepo;
use function DI\object;
return [
    IPharmacyRepo::class => object(SqlitePharmacyRepo::class),
    IConfigManager::class => object(ConfigManager::class)
];