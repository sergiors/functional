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
        $success = function (array $ks) use ($xss, $notfound) {
            $fn = ifelse('is_array', hold(getin, _, tail($ks), $notfound), id);
            return $fn(get($xss, $ks[0], $notfound));
        };
        $fn = ifElse(has(0), $success, always($notfound));

        return $fn($ks);
    })(...$args);
}
