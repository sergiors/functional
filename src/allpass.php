<?php

namespace Sergiors\Functional;

const allpass = __NAMESPACE__.'\allpass';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $preds
 *
 * @return \Closure
 */
function allpass(array $preds)
{
    return function ($x) use ($preds): bool {
        return array_reduce($preds, function (bool $carry, callable $pred) use ($x) {
            return $carry && $pred($x);
        }, true);
    };
}
