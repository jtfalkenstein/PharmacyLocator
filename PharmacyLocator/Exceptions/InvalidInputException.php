<?php

namespace PharmacyLocator\Exceptions;

/**
 * Description of InvalidInputException
 *
 * @author jfalkenstein
 */
class InvalidInputException extends PharmacyLocatorException{
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
