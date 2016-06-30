<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function id()
{
    $args = func_get_args();

    $id = function ($x) {
        return $x;
    };

    return call_user_func_array(partial($id), $args);
}
