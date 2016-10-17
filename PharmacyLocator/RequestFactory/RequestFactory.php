<?php

namespace PharmacyLocator\RequestFactory;

use PharmacyLocator\Exceptions\InvalidInputException;

/**
 * Packages the latitude and longitude query string parameters into
 * a new Request object. The input is filtered and validated using
 * PHP's filter_input function to avoid sql injection and guarantee
 * we are dealing with a floating point number.
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
