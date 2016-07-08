<?php

namespace Sergiors\Functional;

const deleteat = __NAMESPACE__.'\deleteat';

/**
 * @author Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @author Sérgio Rafael Siqueira
 *
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
