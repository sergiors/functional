<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function append()
{
    $args = func_get_args();

    $append = function ($el, array $ls) {
        array_push($ls, $el);
        return $ls;
    };

    return call_user_func_array(partial($append), $args);
}
