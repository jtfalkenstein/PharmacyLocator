<?php

namespace PharmacyLocator\Repository;

/**
 *
 * @author jfalkenstein
 */
interface IPharmacyRepo {
    public function getNearestPharmacy($latitude, $longitude) : PharmacyInfo;
}
