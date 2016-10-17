<?php

namespace PharmacyLocator\ConfigManager;

/**
 * Provides centralized access to the application's configurations.
 * @author jfalkenstein
 */
interface IConfigManager {
        /**
     * Gets a value (or array of values) from the application's configurations.
     * Each successive value in the one-dimensional $key (if it is an array) will
     * go one level deeper. For example: ['repositories','json','testsPath'] would
     * be the equivalent of searching for $config['repositories']['json']['testsPath'].
     * @param array|string $key
     * @return type
     */
    public function getValue($key);
    /**
     * Merges in an array (however deep) of configurations into the config array
     * when called.
     * @param array $configArray
     */
    public function addConfigs(array $configArray);
}
