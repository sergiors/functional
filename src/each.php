<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function each()
{
    $args = func_get_args();

    $every = function ($fn, $ls) {
        $keys = array_keys($ls);
        $count = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

        return array_reduce($keys, function ($carry, $idx) use ($fn, $ls, $count) {
            $args = $ls[$idx];

            if ($count > 1) {
                $carry[$idx] = call_user_func_array($fn, [$idx, $args]);
                return $carry;
            }

            $carry[$idx] = $fn($args);
            return $carry;
        }, []);
    };

    return call_user_func_array(curry($every), $args);
}
