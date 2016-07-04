<?php

namespace Sergiors\Functional;

use Sergiors\Pipeline\Pipeline;

const pipe = '\Sergiors\Functional\pipe';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * Performs left-to-right function composition.
 * The leftmost function may have any arity; the remaining functions must be unary.
 *
 * @return mixed
 */
function pipe(/* ...$args */)
{
    return new Pipeline(func_get_args());
}
