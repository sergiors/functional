<?php

namespace Sergiors\Functional;

const drop = __NAMESPACE__.'\drop';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function drop(/* ...$args */)
{
    $args = func_get_args();

    $drop = function ($n, array $xs) {
        return array_slice($xs, $n);
    };

    return call_user_func_array(partial($drop), $args);
}
