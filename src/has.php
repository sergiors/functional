<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function has()
{
    $args = func_get_args();

    $has = function ($prop, $ls) {
        if (is_object($ls)) {
            $ls = (array) $ls;
        }

        return array_key_exists($prop, $ls);
    };

    return call_user_func_array(curry($has), $args);
}
