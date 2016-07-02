<?php

namespace Sergiors\Functional;

const prop = __NAMESPACE__.'\prop';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function prop(/* ...$args */)
{
    $args = func_get_args();

    $prop = function ($x, array $xs) {
        return get($xs, $x, false);
    };

    return call_user_func_array(partial($prop), $args);
}
