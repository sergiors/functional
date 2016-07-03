<?php

namespace Sergiors\Functional;

const has = __NAMESPACE__.'\has';

/**
 * Just an alias.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function has(/* ...$args */)
{
    $args = func_get_args();

    return call_user_func_array(partial('array_key_exists'), $args);
}
