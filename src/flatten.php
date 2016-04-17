<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $ls
 *
 * @return mixed
 */
function flatten($ls)
{
    $flatten = function ($ls) {
        return array_reduce($ls, function ($carry, $curr) {
            if (is_array($curr)) {
                return array_merge($carry, flatten($curr));
            }

            $carry[] = $curr;
            return $carry;
        }, []);
    };

    return call_user_func(curry($flatten), $ls);
}
