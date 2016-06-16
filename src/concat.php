<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function concat(/* ...$args */)
{
    $args = func_get_args();

    $concat = function ($a, $b) {
        return array_merge($a, $b);
    };

    return call_user_func_array(partial($concat), $args);
}
