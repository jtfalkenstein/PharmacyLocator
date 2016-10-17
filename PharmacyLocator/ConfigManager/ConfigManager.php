<?php

namespace PharmacyLocator\ConfigManager;

/**
 * Provides centralized access to the application's configurations.
 *
 * @author jtfalkenstein
 */
class ConfigManager implements IConfigManager {
    private $configArray;
    
    public function __construct() {
        $this->configArray = include implode('/', [ROOT, 'config', 'config.php']);
    }
    /**
     * Gets a value (or array of values) from the application's configurations.
     * Each successive value in the one-dimensional $key (if it is an array) will
     * go one level deeper. For example: ['repositories','json','testsPath'] would
     * be the equivalent of searching for $config['repositories']['json']['testsPath'].
     * @param array|string $key
     * @return type
     */
    public function getValue($key){
        $value = $this->configArray;
        if(is_array($key)){
            foreach($key as $subKey){
                $value = $value[$subKey];
            }
        }else{
            $value = $this->configArray[$key];
        }
        return $value;        
    }
    
    /**
     * Merges in an array (however deep) of configurations into the config array
     * when called.
     * @param array $configArray
     */
    public function addConfigs(array $configArray) {
        $this->configArray = array_merge_recursive($this->configArray, $configArray);
    }
    
}
