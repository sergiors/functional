<?php

namespace Sergiors\Functional;

/**
 * Almost an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function filter()
{
    $args = func_get_args();

    $filter = function (\Closure $fn, array $ls) {
        return array_filter($ls, $fn);
    };

    return call_user_func_array(curry($filter), $args);
}
