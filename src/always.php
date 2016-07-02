<?php

namespace Sergiors\Functional;

const always = __NAMESPACE__.'\always';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function always(/* ...$args */)
{
    $args = func_get_args();

    $always = function ($x) {
        return function () use ($x) {
            return $x;
        };
    };

    return call_user_func_array(partial($always), $args);
}
