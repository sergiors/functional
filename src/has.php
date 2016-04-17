<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 * 
 * @param string $prop
 *
 * @return mixed
 */
function has($prop)
{
    $has = function ($prop, $ls) {
        if (is_object($ls)) {
            $ls = (array) $ls;
        }

        return array_key_exists($prop, $ls);
    };

    return call_user_func(curry($has), $prop);
}
