<?php

namespace PharmacyLocator\Repository;

/**
 * This is the centralized repository for pharmacy data access
 * @author jfalkenstein
 */
interface IPharmacyRepo {
    public function getNearestPharmacy($latitude, $longitude) : PharmacyInfo;
}
