<?php

namespace Sergiors\Functional;

/**
 * Returns the value in a nested associative structure,
 * where $ks is a sequence of keys. Returns false if the key
 * is not present, or the $notfound value if supplied.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @link https://clojuredocs.org/clojure.core/get-in
 *
 * @return mixed
 */
function getin()
{
    $args = func_get_args();

    $getin = function (array $xs, array $ks, $notfound = false) {
        if (false === isset($ks[0])) {
            return $notfound;
        }

        $x = get($xs, $ks[0], $notfound);

        if (is_array($x)) {
            return getin($x, array_slice($ks, 1), $notfound);
        }

        return $x;
    };

    return call_user_func_array(partial($getin), $args);
}
