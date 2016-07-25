<?php

namespace Sergiors\Functional;

const hold = __NAMESPACE__.'\hold';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param callable $fn
 * @param array ...$args
 *
 * @return mixed
 */
function hold(callable $fn, ...$args)
{
    $ks = pipe(filter(equals(_)), 'array_keys')($args);

    return function ($x) use ($fn, $args, $ks) {
        return [] === $ks
            ? $fn(...array_merge($args, [$x]))
            : $fn(...array_replace($args, [$ks[0] => $x]));
    };
}
