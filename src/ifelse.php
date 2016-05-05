<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function ifelse()
{
    $args = func_get_args();

    $ifelse = function ($condition, $ontrue, $onfalse) {
        return function ($args) use ($condition, $ontrue, $onfalse) {
            if (call_user_func($condition, $args)) {
                return call_user_func($ontrue, $args);
            }

            return call_user_func($onfalse, $args);
        };
    };

    return call_user_func_array(curry($ifelse), $args);
}
