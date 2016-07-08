<?php

namespace Sergiors\Functional;

const sort = __NAMESPACE__.'\sort';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $xss
 *
 * @return array
 */
function sort(array $xss)
{
    $xss = array_values($xss);

    if (not(has(1, $xss))) {
        return $xss;
    }

    $pivot = head($xss);
    $xs = tail($xss);
    $left = array_filter($xs, function ($x) use ($pivot) {
        return $x < $pivot;
    });
    $right = array_filter($xs, function ($x) use ($pivot) {
        return $x > $pivot;
    });

    return array_merge(sort($left), [$pivot], sort($right));
}
