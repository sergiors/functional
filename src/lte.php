<?php

namespace Sergiors\Functional;

const lte = __NAMESPACE__.'\lte';

/**
 * Less than or equals to
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function lte(...$args)
{
    return partial(function ($a, $b) {
        return $a <= $b;
    })(...$args);
}
