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
function get()
{
    $args = func_get_args();

    $get = function (array $xs, $x, $notfound = false) {
        if (isset($xs[$x])) {
            return $xs[$x];
        }

        return $notfound;
    };

    return call_user_func_array(partial($get), $args);
}
