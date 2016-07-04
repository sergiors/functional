<?php

use Sergiors\Functional as F;

require_once __DIR__.'/../vendor/autoload.php';

$join = F\pipe(F\flatten, F\partial('implode', ', '));

$mapCountry = F\map(function ($x) {
    return $x['country'];
});
$countries = F\pipe($mapCountry, $join)->strtoupper(); // or `->pipe('strtoupper')`

$mapCity = F\map(function ($x) {
    return $x['cities'];
});
$cities = F\pipe($mapCity)->pipe($join);

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

assert('BRAZIL, USA, CHINA' === $countries($xs));
assert('Florianópolis, Rio de Janeiro, Porto Alegre, Baltimore, San Diego, Macau, Hong Kong' === $cities($xs));
