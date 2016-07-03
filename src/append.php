<?php

namespace Sergiors\Functional;

const append = '\Sergiors\Functional\append';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function append(/* ...$args */)
{
    $args = func_get_args();

    $append = function ($x, array $xs) {
        return array_merge($xs, [$x]);
    };

    return call_user_func_array(partial($append), $args);
}
