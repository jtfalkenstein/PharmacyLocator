<?php

namespace PharmacyLocator\Responses;

use PharmacyLocator\Exceptions\PharmacyLocatorException;
use PharmacyLocator\Repository\PharmacyInfo;

/**
 * Description of ResponseSerializer
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
            'exceptionType' => get_class($exception),
            'exceptionMessage' => $exception->getMessage()
        ];
        return json_encode($data);
    }

}
