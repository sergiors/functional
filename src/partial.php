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
    $argslen = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return function (...$args) use ($fn, $rest, $argslen) {
        $args = array_merge($rest, $args);

        return isset($args[$argslen - 1])
            ? $fn(...$args)
            : partial($fn, ...$args);
    };
}
