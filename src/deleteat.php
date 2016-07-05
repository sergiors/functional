<?php

namespace Sergiors\Functional;

const deleteat = __NAMESPACE__.'\deleteat';

/**
 * @param array ...$args
 *
 * @return mixed
 */
function deleteat(...$args)
{
    return partial(function ($n, array $xss) {
        return $n > 0
            ? array_merge(take($n, $xss), drop($n + 1, $xss))
            : $xss;
    })(...$args);
}
