<?php

namespace Sergiors\Functional;

const dropwhile = __NAMESPACE__.'\dropwhile';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function dropwhile(...$args)
{
    return partial(function (callable $pred, array $xss) {
        if ([] === $xss) {
            return [];
        }

        $x = head($xss);
        $xs = tail($xss);

        return $pred($x)
            ? dropwhile($pred, $xs)
            : $xss;
    })(...$args);
}
