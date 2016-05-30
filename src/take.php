<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function take()
{
    $args = func_get_args();

    $take = function ($x, array $xs) {
        return array_slice($xs, 0, $x);
    };

    return call_user_func_array(partial($take), $args);
}
