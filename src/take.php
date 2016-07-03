<?php

namespace Sergiors\Functional;

const take = '\Sergiors\Functional\take';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function take(/* ...$args */)
{
    $args = func_get_args();

    $take = function ($n, array $xs) {
        return array_slice($xs, 0, $n);
    };

    return call_user_func_array(partial($take), $args);
}
