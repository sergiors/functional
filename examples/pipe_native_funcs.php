<?php

use Sergiors\Functional as F;

require_once __DIR__.'/../vendor/autoload.php';

$join = F\pipe(
    F\flatten(),
    F\partial('implode', ', ')
);

$countries = F\pipe(
    F\map(function ($x) {
        return $x['country'];
    }),
    $join
);

$cities = F\pipe(
    F\map(function ($x) {
        return $x['cities'];
    }),
    $join
);

$xs = [
    [
        'country' => 'Brazil',
        'cities' => [
            'Florianópolis',
            'Rio de Janeiro',
            'Porto Alegre'
        ]
    ],
    [
        'country' => 'USA',
        'cities' => [
            'Baltimore',
            'San Diego'
        ]
    ],
    [
        'country' => 'China',
        'cities' => [
            'Macau',
            'Hong Kong'
        ]
    ]
];

var_dump($countries($xs)); // => Brazil, USA, China
var_dump($cities($xs)); // => Florianópolis, Rio de Janeiro, Porto Alegre, Baltimore, San Diego, Macau, Hong Kong
