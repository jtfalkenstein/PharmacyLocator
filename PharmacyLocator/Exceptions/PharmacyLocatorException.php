<?php

namespace PharmacyLocator\Exceptions;

/**
 * Description of PharmLocatorException
 *
 * @author jfalkenstein
 */
class PharmacyLocatorException extends \Exception {
    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
