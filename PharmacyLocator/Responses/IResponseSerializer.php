<?php

namespace PharmacyLocator\Responses;

use PharmacyLocator\Exceptions\PharmacyLocatorException;
use PharmacyLocator\Repository\PharmacyInfo;

/**
 *
 * @author jfalkenstein
 */
interface IResponseSerializer {
    public function package(PharmacyInfo $pharmInfo) : string;
    public function packageException(PharmacyLocatorException $exception) : string;
}
