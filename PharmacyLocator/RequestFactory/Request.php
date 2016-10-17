<?php

namespace PharmacyLocator\RequestFactory;

/**
 * The central container of latitude and longitude derrived from
 * the query string parameters.
 *
 * @author jfalkenstein
 */
class Request {
    public function __construct($latitude, $longitude) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
    
    public $latitude;
    public $longitude;
    
    
}
