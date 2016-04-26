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

    $every = function (\Closure $fn, array $ls) {
        $keys = array_keys($ls);
        $count = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

        return array_reduce($keys, function ($carry, $key) use ($fn, $ls, $count) {
            $args = $ls[$key];

            if ($count > 1) {
                $carry[$key] = call_user_func_array($fn, [$key, $args]);

                return $carry;
            }

            $carry[$key] = call_user_func($fn, $args);

            return $carry;
        }, []);
    };

    return call_user_func_array(curry($every), $args);
}
