<?php

namespace Sergiors\Functional;

const gt = __NAMESPACE__.'\gt';

/**
 * Greater than
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function gt(...$args)
{
    return partial(function ($a, $b) {
        return $a > $b;
    })(...$args);
}
