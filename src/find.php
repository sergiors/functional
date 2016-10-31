<?php

namespace Sergiors\Functional;

const find = __NAMESPACE__.'\find';

/**
 * @author Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function find(...$args)
{
    return partial(function (callable $pred, array $xss) {
        return ifelse(equals([]), always(null), function (array $xss) use ($pred) {
            $x = head($xss);
            $xs = tail($xss);
            return ifelse($pred, id, always(find($pred, $xs)))($x);
        })($xss);
    })(...$args);
}
