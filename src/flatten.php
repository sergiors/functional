<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function flatten()
{
    $args = func_get_args();

    $flatten = function (array $xs) {
        return array_reduce($xs, function ($carry, $x) {
            if (is_array($x)) {
                return array_merge($carry, flatten($x));
            }

            $carry[] = $x;

            return $carry;
        }, []);
    };

    return call_user_func_array(partial($flatten), $args);
}
