<?php

namespace Sergiors\Functional;

const getIn = __NAMESPACE__.'\getIn';

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
function getIn(...$args)
{
    return partial(function (array $xss, array $ks, $notfound = false) {
        return ifElse(has(0), function (array $ks) use ($xss, $notfound) {
            return ifElse('is_array', hold(getIn, _, tail($ks), $notfound), id)(get($xss, $ks[0], $notfound));
        }, always($notfound))($ks);
    })(...$args);
}
