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

    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return bool
     */
    $gt = function ($a, $b) {
        return $a < $b;
    };

    return call_user_func_array(curry($gt), $args);
}

/**
 * Just an alias
 */
function less_than()
{
    $args = func_get_args();
    return call_user_func_array(__NAMESPACE__.'\less_than', $args);
}
