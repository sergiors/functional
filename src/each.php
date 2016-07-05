<?php

namespace Sergiors\Functional;

const each = __NAMESPACE__.'\each';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function each(...$args)
{
    return partial(function (callable $fn, array $xss) {
        array_walk($xss, $fn);
        return $xss;
    })(...$args);
}
