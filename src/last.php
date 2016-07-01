<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function last(/* ...$args */)
{
    $args = func_get_args();

    $last = function ($xs) {
        return get(array_values(array_slice($xs, -1)), 0, null);
    };

    return call_user_func_array(partial($last), $args);
}
