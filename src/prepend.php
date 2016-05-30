<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
function prepend()
{
    $args = func_get_args();

    $prepend = function ($x, array $xs) {
        return array_merge([$x], $xs);
    };

    return call_user_func_array(partial($prepend), $args);
}
