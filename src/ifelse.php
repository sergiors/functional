<?php

namespace Sergiors\Functional;

const ifelse = __NAMESPACE__.'\ifelse';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function ifelse(...$args)
{
    return (function (callable $pred, callable $ontrue, callable $onfalse) {
        return function ($x) use ($pred, $ontrue, $onfalse) {
            return $pred($x)
                ? $ontrue($x)
                : $onfalse($x);
        };
    })(...$args);
}
