<?php

namespace Sergiors\Functional;

const ifelse = __NAMESPACE__.'\ifelse';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function ifelse(/* ...$args */)
{
    $args = func_get_args();

    $ifelse = function (callable $condition, callable $ontrue, callable $onfalse) {
        return function ($x) use ($condition, $ontrue, $onfalse) {
            if ($condition($x)) {
                return $ontrue($x);
            }

            return $onfalse($x);
        };
    };

    return call_user_func_array(partial($ifelse), $args);
}
