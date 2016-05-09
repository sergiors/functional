<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function drop()
{
    $args = func_get_args();

    $drop = function ($n, array $ls) {
        return array_slice($ls, $n);
    };

    return call_user_func_array(partial($drop), $args);
}
