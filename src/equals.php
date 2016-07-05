<?php

namespace Sergiors\Functional;

const equals = __NAMESPACE__.'\equals';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function equals(...$args)
{
    return partial(function ($a, $b) {
        return $a === $b;
    })(...$args);
}
