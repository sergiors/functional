<?php

namespace Sergiors\Functional;


/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function not()
{
    $args = func_get_args();

    /**
     * @param mixed $val
     *
     * @return bool
     */
    $not = function ($val) {
        return !$val;
    };

    return call_user_func_array(curry($not), $args);
}
