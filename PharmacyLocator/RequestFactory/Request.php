<?php

namespace PharmacyLocator\Request;

/**
 * Description of Request
 *
 * @author jfalkenstein
 */
class Request {
    public function __construct(float $latitude, float $longitude) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
    
    public $latitude;
    public $longitude;
    
    
}
