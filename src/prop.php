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

    $prop = function ($prop, $ls) {
        $ls = (array) $ls;

        if (array_key_exists($prop, $ls)) {
            return $ls[$prop];
        }

        return false;
    };

    return call_user_func_array(partial($prop), $args);
}
