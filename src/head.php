<?php

namespace Sergiors\Functional;

const head = __NAMESPACE__.'\head';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function head(/* ...$args */)
{
    $args = func_get_args();

    $head = function ($xs) {
        if ([] === $xs
            || '' === $xs
            || null === $xs
        ) {
            return null;
        }

        if (is_array($xs)) {
            return array_values($xs)[0];
        }

        return $xs[0];
    };

    return call_user_func_array(partial($head), $args);
}
