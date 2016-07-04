<?php

namespace Sergiors\Functional;

const hold = '\Sergiors\Functional\hold';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param callable $fn
 *
 * @return mixed
 */
function hold(callable $fn /* ...$args */)
{
    $placeholder = pipe(filter(function ($x) {
        return _ === $x;
    }))->pipe('array_keys');

    $args = array_slice(func_get_args(), 1);
    $ks = $placeholder($args);

    return function ($x) use ($fn, $args, $ks) {
        if ([] === $ks) {
            return call_user_func_array($fn, array_merge($args, [$x]));
        }

        return call_user_func_array($fn, array_replace($args, [
            $ks[0] => $x
        ]));
    };
}
