<?php

namespace Sergiors\Functional;

const append = __NAMESPACE__.'\append';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function append(...$args)
{
    return partial(function ($x, array $xs) {
        return array_merge($xs, [$x]);
    })(...$args);
}
