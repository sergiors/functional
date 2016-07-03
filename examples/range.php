<?php

use Sergiors\Functional as F;

require_once __DIR__.'/../vendor/autoload.php';

$scores = new F\Collection(range(1, 10));

$x = $scores
    ->map(function ($x) {
        return $x * 3;
    })
    ->filter(function ($x) {
        return $x % 2 === 0;
    })
    ->reduce(function ($acc, $x) {
        return $acc + $x;
    });


assert($x === 90);
