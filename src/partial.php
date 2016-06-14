<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param callable $fn
 *
 * @return mixed
 */
function partial(callable $fn)
{
    $args = array_slice(func_get_args(), 1);
    $params = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return function () use ($fn, $args, $params) {
        $args = array_merge($args, func_get_args());

        if ($params > count($args)) {
            $args = array_merge([$fn], $args);
            return call_user_func_array(__NAMESPACE__.'\partial', $args);
        }

        return call_user_func_array($fn, $args);
    };
}
