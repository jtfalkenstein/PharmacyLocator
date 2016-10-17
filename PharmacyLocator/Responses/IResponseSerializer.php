<?php

namespace PharmacyLocator\Responses;

use PharmacyLocator\Exceptions\PharmacyLocatorException;
use PharmacyLocator\Repository\PharmacyInfo;

/**
 * Serializes the input given it into a string that can be echoed as the response.
 * @author jfalkenstein
 */
interface IResponseSerializer {
    public function package(PharmacyInfo $pharmInfo) : string;
    public function packageException(PharmacyLocatorException $exception) : string;
}
