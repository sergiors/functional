<?php

namespace Sergiors\Functional;

const has = __NAMESPACE__.'\has';

/**
 * Just an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function has(...$args)
{
    return partial(function ($x, array $xss) {
        return isset($xss[$x]);
    })(...$args);
}
