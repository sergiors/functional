<?php

namespace Sergiors\Functional;

const partial = __NAMESPACE__.'\partial';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param callable $fn
 * @param array ...$rest
 *
 * @return mixed
 */
function partial(callable $fn, ...$rest)
{
    $numRequiredParams = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return function (...$args) use ($fn, $rest, $numRequiredParams) {
        $args = array_merge($rest, $args);

        return $numRequiredParams > count($args)
            ? partial($fn, ...$args)
            : $fn(...$args);
    };
}
