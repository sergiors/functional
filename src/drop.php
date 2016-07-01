<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function drop(/* ...$args */)
{
    $args = func_get_args();

    $drop = function ($x, array $xs) {
        return array_slice($xs, $x);
    };

    return call_user_func_array(partial($drop), $args);
}
