<?php

namespace Sergiors\Functional;

const gte = __NAMESPACE__.'\gte';

/**
 * Greater than or equals to
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function gte(...$args)
{
    return partial(function ($a, $b) {
        return $a >= $b;
    })(...$args);
}
