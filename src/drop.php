<?php

namespace Sergiors\Functional;

const drop = __NAMESPACE__.'\drop';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function drop(...$args)
{
    return partial(function ($n, array $xss) {
        return array_slice($xss, $n);
    })(...$args);
}
