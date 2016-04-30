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
        $params = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

        return array_map(function ($val) use ($fn, $ls, $params) {
            $args = [$val];

            if ($params > 1) {
                array_unshift($args, array_search($val, $ls));
            }

            call_user_func_array($fn, $args);

            return $val;
        }, $ls);
    };

    return call_user_func_array(curry($every), $args);
}
