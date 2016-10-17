<?php

namespace PharmacyLocator\Responses;

use PharmacyLocator\Exceptions\PharmacyLocatorException;
use PharmacyLocator\Repository\PharmacyInfo;

/**
 * The default implementation of IResponseSerializer.
 * Sets the Content-Type to application/json and then packages
 * either the PharmacyInfo object (if the request was successful) or
 * the PharmacyLocatorException (if not).
 * 
 * All responses will be in JSON format and will have two properties: data and 
 * status. The "data" property will contain the name, address, city, state, zip,
 * and distance of the closest pharmacy. The status will wither be "success"
 * or "failure."
 *
 * @author jfalkenstein
 */
class JsonResponseSerializer implements IResponseSerializer{
    public function __construct() {
        header('Content-Type:application/json');
    }
    public function package(PharmacyInfo $pharmInfo): string {
        $data = [
            'data' =>[
                'name' => $pharmInfo->name,
                'address' => $pharmInfo->address,
                'city' => $pharmInfo->city,
                'state' => $pharmInfo->state,
                'zip' => $pharmInfo->zip,
                'distance' => round($pharmInfo->distance, 1)
            ],
            'status' => 'success'
        ];
        return json_encode($data);
        
    }

    public function packageException(PharmacyLocatorException $exception): string {
        $data = [
            'status' => 'exception',
            'exceptionMessage' => $exception->getMessage()
        ];
        return json_encode($data);
    }

}
