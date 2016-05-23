<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
function prepend()
{
    $args = func_get_args();

    $prepend = function ($el, array $ls) {
        return array_merge([$el], $ls);
    };

    return call_user_func_array(partial($prepend), $args);
}
