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

        return array_key_exists($argslen - 1, $args)
            ? $fn(...$args)
            : partial($fn, ...$args);
    };
}
