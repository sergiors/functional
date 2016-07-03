<?php

namespace Sergiors\Functional;

const concat = __NAMESPACE__.'\concat';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function concat(/* ...$args */)
{
    $args = func_get_args();

    $concat = function ($a, $b /* ...$args */) {
        $rest = array_slice(func_get_args(), 2);

        return call_user_func_array('array_merge', array_merge([$a, $b], $rest));
    };

    return call_user_func_array(partial($concat), $args);
}
