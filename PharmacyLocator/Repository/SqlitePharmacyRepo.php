<?php

namespace PharmacyLocator\Repository;

use PDO;
use PharmacyLocator\ConfigManager\IConfigManager;

/**
 * Description of SqlitePharmacyRepo
 *
 * @author jfalkenstein
 */
class SqlitePharmacyRepo implements IPharmacyRepo {
    
    private $config;
    
    public function __construct(IConfigManager $config) {
        $this->config = $config->getValue(['repository', 'sqlite']);
    }
    public function getNearestPharmacy($latitude, $longitude) : PharmacyInfo {
        $pdo = $this->getPDO();
        $query = $pdo->prepare($this->config['query']);
        $query->execute(['lat' => $latitude, 'lon' => $longitude]);
        $query->setFetchMode(PDO::FETCH_CLASS, PharmacyInfo::class);
        $result = $query->fetch();
        return $result;
    }
    
    function getPDO() : PDO{
        $dsn = "sqlite:" . $this->config['path'];
        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->sqliteCreateFunction('distance', [$this,'sqliteDistanceFunc'], 4);
        return $pdo;
    }
    
    public function sqliteDistanceFunc($lat1, $lon1, $lat2, $lon2){
        $lat1rad = deg2rad($lat1);
        $lat2rad = deg2rad($lat2);
        return ( 3959 * acos( cos( $lat2rad ) * cos( $lat1rad ) * cos( deg2rad($lon1) - deg2rad($lon2) ) + sin( $lat2rad ) * sin( $lat1rad ) ) );
    }

}