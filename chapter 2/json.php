<?php

$media = new stdClass();

$media->movies = [
    'Hero the Superstar' => [
        'year' => 2005,
        'country' => 'BD',
        'dudget'  => 199999,
        'actor'   => [
            'man' => [
                'Hero Alom', 'Salman Khan', 'Krittik'
            ],
            'woman' => [
                'Pori Moni', 'Mia Khalifa'
            ]
        ]
    ],
    'Hero the Rock Star' => [
        'year' => 2009,
        'country' => 'UDS',
        'dudget'  => 199999,
        'actor'   => [
            'man' => [
                'Hero Alom', 'Salman Khan', 'Krittik'
            ],
            'woman' => [
                'Pori Moni', 'Mia Khalifa'
            ]
        ]
    ]
];

$result = json_decode(json_encode($media));
echo json_last_error() . PHP_EOL . json_last_error_msg();