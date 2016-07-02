<?php

namespace Sergiors\Functional;

const reduce = __NAMESPACE__.'\reduce';

/**
 * Almost an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function reduce(/* ...$args */)
{
    $args = func_get_args();

    $reduce = function (callable $fn, array $xs, $initial = null) {
        return array_reduce($xs, $fn, $initial);
    };

    return call_user_func_array(partial($reduce), $args);
}
