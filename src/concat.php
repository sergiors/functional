<?php

namespace Sergiors\Functional;

const concat = __NAMESPACE__.'\concat';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function concat(...$args)
{
    return partial(function ($a, $b, ...$rest) {
        return array_merge(...array_merge([$a, $b], $rest));
    })(...$args);
}
