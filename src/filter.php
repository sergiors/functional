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

    $filter = function (\Closure $fn, array $xs) {
        return array_filter($xs, $fn);
    };

    return call_user_func_array(partial($filter), $args);
}
