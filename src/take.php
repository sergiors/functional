<?php

namespace Sergiors\Functional;

const take = __NAMESPACE__.'\take';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function take(...$args)
{
    return partial(function ($n, array $xs) {
        return array_slice($xs, 0, $n);
    })(...$args);
}
