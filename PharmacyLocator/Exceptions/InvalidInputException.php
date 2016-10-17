<?php

namespace PharmacyLocator\Exceptions;

/**
 * Indicates either the latitude or longitude were invalid floating point numbers.
 *
 * @author jfalkenstein
 */
class InvalidInputException extends PharmacyLocatorException{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
