<?php

namespace Sergiors\Functional;

/**
 * Almost an alias
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function reduce()
{
    $args = func_get_args();

    /**
     * @param \Closure $fn
     * @param array    $ls
     * @param null    $initial
     *
     * @return mixed
     */
    $reduce = function ($fn, $ls, $initial = null) {
        return array_reduce($ls, $fn, $initial);
    };

    return call_user_func_array(curry($reduce), $args);
}
