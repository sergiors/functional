<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function always()
{
    $args = func_get_args();

    $always = function ($val) {
        return function () use ($val) {
            return $val;
        };
    };

    return call_user_func_array(partial($always), $args);
}
