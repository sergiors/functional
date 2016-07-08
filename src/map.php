<?php

namespace Sergiors\Functional;

const map = __NAMESPACE__.'\map';

/**
 * Just an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @link http://php.net/array_map
 *
 * @param array ...$args
 *
 * @return mixed
 */
function map(...$args)
{
    return partial('array_map')(...$args);
}
