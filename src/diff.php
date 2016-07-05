<?php

namespace Sergiors\Functional;

const diff = __NAMESPACE__.'\diff';

/**
 * Just an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @link http://php.net/array_diff
 *
 * @param array ...$args
 *
 * @return mixed
 */
function diff(...$args)
{
    return partial('array_diff')(...$args);
}
