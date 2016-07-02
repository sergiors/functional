<?php

namespace Sergiors\Functional;

const flatten = __NAMESPACE__.'\flatten';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function flatten(/* ...$args */)
{
    $args = func_get_args();

    $flatten = function (array $xs) {
        return array_reduce($xs, function ($carry, $x) {
            if (is_array($x)) {
                return array_merge($carry, flatten($x));
            }

            return array_merge($carry, [$x]);
        }, []);
    };

    return call_user_func_array(partial($flatten), $args);
}
