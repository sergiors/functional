<?php

namespace Sergiors\Functional;

const get = __NAMESPACE__.'\get';

/**
 * Returns the value mapped to key, $notfound value if key not present.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @link https://clojuredocs.org/clojure.core/get
 *
 * @param array ...$args
 *
 * @return mixed
 */
function get(...$args)
{
    return partial(function (array $xss, $x, $notfound = false) {
        $fn = ifelse(has($x), function (array $xss) use ($x) {
            return $xss[$x];
        }, always($notfound));
        
        return $fn($xss);
    })(...$args);
}
