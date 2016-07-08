<?php

namespace Sergiors\Functional;

const takewhile = __NAMESPACE__.'\takewhile';

/**
 * @author Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return array
 */
function takewhile(...$args)
{
    return partial(function (callable $pred, array $xss) {
        if ([] === $xss) {
            return [];
        }

        $x = head($xss);
        $xs = tail($xss);

        return $pred($x)
            ? array_merge([$x], takewhile($pred, $xs))
            : [];
    })(...$args);
}
