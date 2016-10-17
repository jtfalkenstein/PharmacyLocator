<?php

namespace PharmacyLocator\RequestFactory;

use PharmacyLocator\Exceptions\InvalidInputException;

/**
 * Description of RequestFactory
 *
 * @author jfalkenstein
 */
class RequestFactory {
    public function packageRequest() : Request{
        $lat = filter_input(INPUT_GET, 'lat', FILTER_VALIDATE_FLOAT);
        $lon = filter_input(INPUT_GET, 'lon', FILTER_VALIDATE_FLOAT);
        if($lat === false || is_null($lat)){
            throw new InvalidInputException("Invalid Latitude");
        }
        if($lon === false || is_null($lon)){
            throw new InvalidInputException("Invalid Longitude");
        }
        return new Request($lat, $lon);
    }
}
