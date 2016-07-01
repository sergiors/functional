<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function prop()
{
    $args = func_get_args();

    $prop = function ($x, $xs) {
        return get($xs, $x);
    };

    return call_user_func_array(partial($prop), $args);
}
