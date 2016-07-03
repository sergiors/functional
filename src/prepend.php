<?php

namespace Sergiors\Functional;

const prepend = '\Sergiors\Functional\prepend';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function prepend(/* ...$args */)
{
    $args = func_get_args();

    $prepend = function ($x, array $xs) {
        return array_merge([$x], $xs);
    };

    return call_user_func_array(partial($prepend), $args);
}
