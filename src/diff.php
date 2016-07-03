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
 * @return mixed
 */
function diff(/* ...$args */)
{
    $args = func_get_args();

    return call_user_func_array(partial('array_diff'), $args);
}
