<?php

namespace Sergiors\Functional;

const compose = __NAMESPACE__.'\compose';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * Performs right-to-left function composition.
 * The rightmost function may have any arity; the remaining functions must be unary.
 *
 * @return mixed
 */
function compose(/* ...$args */)
{
    $args = func_get_args();

    return call_user_func_array(__NAMESPACE__.'\pipe', array_reverse($args));
}
