<?php

namespace Sergiors\Functional;

const partial = __NAMESPACE__.'\partial';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param callable $fn
 *
 * @return mixed
 */
function partial(callable $fn /* ...$args */)
{
    $args = array_slice(func_get_args(), 1);
    $numRequiredParams = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return function (/* ...$args */) use ($fn, $args, $numRequiredParams) {
        $args = array_merge($args, func_get_args());

        if ($numRequiredParams > count($args)) {
            return call_user_func_array(__NAMESPACE__.'\partial', array_merge([$fn], $args));
        }

        return call_user_func_array($fn, $args);
    };
}
