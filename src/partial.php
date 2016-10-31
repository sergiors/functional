<?php

namespace Sergiors\Functional;

const partial = __NAMESPACE__.'\partial';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param callable $fn
 * @param array ...$args
 *
 * @return mixed
 */
function partial(callable $fn, ...$args)
{
    $arity = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return isset($args[$arity - 1])
        ? $fn(...$args)
        : function (...$restArgs) use ($fn, $args) {
            return partial($fn, ...array_merge($args, $restArgs));
        };
}

