<?php

namespace Sergiors\Functional;

const deleteat = '\Sergiors\Functional\deleteat';

function deleteat(/* ...$args */)
{
    $args = func_get_args();

    $deleteat = function ($n, array $xs) {
        if ($n > 0) {
            return array_merge(take($n, $xs), drop($n + 1, $xs));
        }

        return $xs;
    };

    return call_user_func_array(partial($deleteat), $args);
}
