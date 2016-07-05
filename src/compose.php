<?php

namespace Sergiors\Functional;

const compose = __NAMESPACE__.'\compose';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * Performs right-to-left function composition.
 * The rightmost function may have any arity; the remaining functions must be unary.
 *
 * @param array ...$args
 *
 * @return mixed
 */
function compose(...$args)
{
    return pipe(...array_reverse($args));
}
