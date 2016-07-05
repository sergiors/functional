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
 * @param array ...$args
 *
 * @return mixed
 */
function getin(...$args)
{
    return partial(function (array $xss, array $ks, $notfound = false) {
        if (!has(0, $ks)) {
            return $notfound;
        }

        $xs = get($xss, $ks[0], $notfound);

        return is_array($xs)
            ? getin($xs, tail($ks), $notfound)
            : $xs;
    })(...$args);
}
