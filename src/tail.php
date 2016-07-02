<?php

namespace Sergiors\Functional;

const tail = __NAMESPACE__.'\tail';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return array
 */
function tail(/* ...$args */)
{
    $args = func_get_args();

    $tail = function (array $xs) {
        return array_slice($xs, 1);
    };

    return call_user_func_array(partial($tail), $args);
}
