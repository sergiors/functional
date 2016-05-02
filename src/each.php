<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function each()
{
    $args = func_get_args();

    $each = function (\Closure $fn, array $ls) {
        array_walk($ls, $fn);
        return $ls;
    };

    return call_user_func_array(curry($each), $args);
}
