<?php

namespace PharmacyLocator\RequestFactory;

/**
 * Description of Request
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
