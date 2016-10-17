<?php

namespace PharmacyLocator\Repository;

use PDO;
use PharmacyLocator\ConfigManager\IConfigManager;

/**
 * This is the default implementation of the IPharmacyRepo. It uses
 * a sqlite database for data access. It automatically sets the header
 * to have a Content-Type of "application/json."
 * 
 * The sql query used to obtain the nearest pharmacy can be found in the sql folder.
 * 
 * This makes use of the PDO library within PHP to avoid SQL injection.
 * @author jfalkenstein
 */
class SqlitePharmacyRepo implements IPharmacyRepo {
    
    private $config;
    
    public function __construct(IConfigManager $config) {
        $this->config = $config->getValue(['repository', 'sqlite']);
    }
    
    /**
     * Obtains the nearest pharmacy from the given latitude and longitude, including
     * its distance (as the crow flies).
     * @param float $latitude
     * @param float $longitude
     * @return \PharmacyLocator\Repository\PharmacyInfo
     */
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
    /**
     * This function is used to process the query to calculate the distance. It 
     * uses the Haversine formula to calculate distance around a sphere (i.e. 
     * the globe, with a radius of 3959 miles). Because sqlite doesn't have 
     * trignometry functions as other dbs do (like MySql), I had to add this one
     * below.
     * @param float $lat1 The first latitude
     * @param float $lon1 The first longitude
     * @param float $lat2 The second latitude
     * @param float $lon2 The second longitude
     * @return float
     */
    function sqliteDistanceFunc($lat1, $lon1, $lat2, $lon2){
        $lat1rad = deg2rad($lat1);
        $lat2rad = deg2rad($lat2);
        return ( 3959 * acos( cos( $lat2rad ) * cos( $lat1rad ) * cos( deg2rad($lon1) - deg2rad($lon2) ) + sin( $lat2rad ) * sin( $lat1rad ) ) );
    }

}