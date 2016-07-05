<?php

namespace Sergiors\Functional;

const filter = __NAMESPACE__.'\filter';

/**
 * Almost an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function filter(...$args)
{
    return partial(function (callable $fn, array $xss) {
        return array_filter($xss, $fn);
    })(...$args);
}
