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
        $params = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

        return array_reduce($keys, function (array $carry, $key) use ($fn, $params) {
            $args = [
                $carry[$key]
            ];

            if ($params > 1) {
                array_unshift($args, $key);
            }

            call_user_func_array($fn, $args);

            return $carry;
        }, $ls);
    };

    return call_user_func_array(curry($every), $args);
}
