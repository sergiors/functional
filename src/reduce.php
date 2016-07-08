<?php

namespace Sergiors\Functional;

const reduce = __NAMESPACE__.'\reduce';

/**
 * Almost an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function reduce(...$args)
{
    return partial(function (callable $fn, array $xs, $initial = null) {
        return array_reduce($xs, $fn, $initial);
    })(...$args);
}
