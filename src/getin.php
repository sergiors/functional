<?php

namespace Sergiors\Functional;

const getin = __NAMESPACE__.'\getin';

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
function getin(/* ...$args */)
{
    $args = func_get_args();

    $getin = function (array $xs, array $ks, $notfound = false) {
        if (false === array_key_exists(0, $ks)) {
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
