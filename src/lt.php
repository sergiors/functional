<?php

namespace Sergiors\Functional;

const lt = __NAMESPACE__.'\lt';

/**
 * Less than
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array ...$args
 *
 * @return mixed
 */
function lt(...$args)
{
    return partial(function ($a, $b) {
        return $a < $b;
    })(...$args);
}
