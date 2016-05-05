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

    $prop = function ($prop, $ls, $default = false) {
        $ls = (array) $ls;
        
        if (has($prop, $ls)) {
            return $ls[$prop];
        }

        return $default;
    };

    return call_user_func_array(curry($prop), $args);
}
