<?php

namespace PharmacyLocator\Repository;

/**
 * The central storage class for information about a pharmacy.
 *
 * @author jfalkenstein
 */
class PharmacyInfo {
    public $id;
    public $name;
    public $address;
    public $city;
    public $state;
    public $zip;
    public $distance;
}
