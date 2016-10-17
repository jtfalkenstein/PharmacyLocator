<?php
/*
 * This is the central config file for the Pharmacy Locator. Currently, 
 * it is only used by the SqLitePharmacyRepo class, but it could be used
 * elsewhere. If a different database technology were used, this would be 
 * where the connection string parameters could be configured.
 */
return [
    'repository' => [
        'sqlite' => [
            'path' => implode(DS, [ROOT,'pharmacies.db']),
            'query' => file_get_contents(implode(DS, [ROOT, 'sql', 'distanceQuery.sql']))
        ]
    ]
];