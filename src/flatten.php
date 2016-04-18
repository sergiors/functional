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

    /**
     * @param array $ls
     *
     * @return array
     */
    $flatten = function ($ls) {
        return array_reduce($ls, function ($carry, $curr) {
            if (is_array($curr)) {
                return array_merge($carry, flatten($curr));
            }

            $carry[] = $curr;
            return $carry;
        }, []);
    };

    return call_user_func_array(curry($flatten), $args);
}
