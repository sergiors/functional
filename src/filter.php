<?php

namespace Sergiors\Functional;

const filter = __NAMESPACE__.'\filter';

/**
 * Almost an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function filter(/* ...$args */)
{
    $args = func_get_args();

    $filter = function (callable $fn, array $xs) {
        return array_filter($xs, $fn);
    };

    return call_user_func_array(partial($filter), $args);
}
