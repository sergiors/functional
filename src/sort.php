<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function sort(/* ...$args */)
{
    $args = func_get_args();

    $sort = function (array $xs, callable $fn) {
        $xs = array_values($xs);

        if (false === array_key_exists(1, $xs)) {
            return $xs;
        }

        $pivot = $xs[0];
        $xss = array_slice($xs, 1);
        $left = array_filter($xss, function ($x) use ($pivot) {
            return $x < $pivot;
        });
        $right = array_filter($xss, function ($x) use ($pivot) {
            return $x > $pivot;
        });

        return array_merge(sort($left, $fn), [$pivot], sort($right, $fn));
    };

    return call_user_func_array(partial($sort), $args);
}
