<?php

return [
    'repository' => [
        'sqlite' => [
            'path' => implode(DS, [ROOT,'pharmacies.db']),
            'query' => file_get_contents(implode(DS, [ROOT, 'sql', 'distanceQuery.sql']))
        ]
    ]
];