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
    return partial(function (callable $pred, $xss) {
        if ([] == $xss) {
            return null;
        };

        $x = head($xss);
        $xs = tail($xss);

        return $pred($x)
            ? $x
            : find($pred, $xs);
    })(...$args);
}
