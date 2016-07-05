<?php

namespace Sergiors\Functional;

const prepend = __NAMESPACE__.'\prepend';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function prepend(...$args)
{
    return partial(function ($x, array $xs) {
        return array_merge([$x], $xs);
    })(...$args);
}
