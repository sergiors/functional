<?php

namespace Sergiors\Functional;

const prop = __NAMESPACE__.'\prop';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function prop(...$args)
{
    return partial(function ($x, array $xss) {
        return get($xss, $x, false);
    })(...$args);
}
