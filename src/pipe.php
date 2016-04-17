<?php

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * Performs left-to-right function composition.
 * The leftmost function may have any arity; the remaining functions must be unary.
 *
 * @return mixed
 */
function pipe()
{
    $ls = func_get_args();

    $pipe = function ($ls) {
        return array_reduce($ls, function ($carry, $fn) {
            if (is_null($carry)) {
                return $fn;
            }

            return function () use ($carry, $fn) {
                $args = func_get_args();
                return $fn(call_user_func_array($carry, $args));
            };
        });
    };

    return call_user_func(curry($pipe), $ls);
}
