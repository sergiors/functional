<?php

namespace Sergiors\Functional;

const partial = '\Sergiors\Functional\partial';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param callable $fn
 *
 * @return mixed
 */
function partial(callable $fn /* ...$args */)
{
    $args = tail(func_get_args());
    $numRequiredParams = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return function (/* ...$args */) use ($fn, $args, $numRequiredParams) {
        $args = array_merge($args, func_get_args());

        if ($numRequiredParams > count($args)) {
            return call_user_func_array('\Sergiors\Functional\partial', array_merge([$fn], $args));
        }

        return call_user_func_array($fn, $args);
    };
}
