<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function equals()
{
    $args = func_get_args();

    $equals = function ($a, $b) {
        return $a === $b;
    };

    return call_user_func_array(curry($equals), $args);
}
