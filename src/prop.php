<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function prop()
{
    $args = func_get_args();

    $prop = function ($x, $xs) {
        $xs = (array) $xs;
        
        if (array_key_exists($x, $xs)) {
            return $xs[$x];
        }

        return false;
    };

    return call_user_func_array(partial($prop), $args);
}
