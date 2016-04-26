<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function gt()
{
    $args = func_get_args();

    $gt = function ($a, $b) {
        return $a > $b;
    };

    return call_user_func_array(curry($gt), $args);
}

/**
 * Just an alias.
 */
function greater_than()
{
    $args = func_get_args();

    return call_user_func_array(__NAMESPACE__.'\greater_than', $args);
}
