<?php

namespace Sergiors\Functional;

/**
 * Less than
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function lt(/* ...$args */)
{
    $args = func_get_args();

    $lt = function ($a, $b) {
        return $a < $b;
    };

    return call_user_func_array(partial($lt), $args);
}
