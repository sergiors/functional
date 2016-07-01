<?php

namespace Sergiors\Functional;

/**
 * Returns the value mapped to key, $notfound value if key not present.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @link https://clojuredocs.org/clojure.core/get
 *
 * @return mixed
 */
function get(/* ...$args */)
{
    $args = func_get_args();

    $get = function ($xs, $x, $notfound = false) {
        $xs = (array) $xs;

        if (array_key_exists($x, $xs)) {
            return $xs[$x];
        }

        return $notfound;
    };

    return call_user_func_array(partial($get), $args);
}
