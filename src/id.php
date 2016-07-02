<?php

namespace Sergiors\Functional;

const id = __NAMESPACE__.'\id';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function id(/* ...$args */)
{
    $args = func_get_args();

    $id = function ($x) {
        return $x;
    };

    return call_user_func_array(partial($id), $args);
}
