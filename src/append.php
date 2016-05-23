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
        return array_merge($ls, [$el]);
    };

    return call_user_func_array(partial($append), $args);
}
