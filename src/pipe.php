<?php

namespace Sergiors\Functional;

const pipe = '\Sergiors\Functional\pipe';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * Performs left-to-right function composition.
 * The leftmost function may have any arity; the remaining functions must be unary.
 *
 * @return mixed
 */
function pipe(/* ...$args */)
{
    $args = func_get_args();

    return array_reduce($args, function ($carry, $fn) {
        if (null === $carry) {
            return $fn;
        }

        return function () use ($carry, $fn) {
            $args = func_get_args();

            return $fn(call_user_func_array($carry, $args));
        };
    });
}
