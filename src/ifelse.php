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

    $ifelse = function ($condition, $onTrue, $onFalse) {
        return function ($args) use ($condition, $onTrue, $onFalse) {
            if (call_user_func($condition, $args)) {
                return call_user_func($onTrue, $args);
            }

            return call_user_func($onFalse, $args);
        };
    };

    return call_user_func_array(curry($ifelse), $args);
}
