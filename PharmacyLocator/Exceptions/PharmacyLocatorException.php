<?php

namespace PharmacyLocator\Exceptions;

/**
 * This is the base class for all internally thrown exceptions. It will allow 
 *
 * @author jfalkenstein
 */
class PharmacyLocatorException extends \Exception {
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
