<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function lt()
{
    $args = func_get_args();

    $lt = function ($a, $b) {
        return $a < $b;
    };

    return call_user_func_array(curry($lt), $args);
}

/**
 * Just an alias.
 */
function less_than()
{
    $args = func_get_args();

    return call_user_func_array(__NAMESPACE__.'\less_than', $args);
}
