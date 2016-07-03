<?php

namespace Sergiors\Functional;

/**
 * @author Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function takewhile(/* ...$args */)
{
    $args = func_get_args();

    $takewhile = function (callable $condition, array $xss) {
        if ([] === $xss) {
            return [];
        }

        $head = head($xss);
        $tail = tail($xss);

        if ($condition($head)) {
            return array_merge([$head], takewhile($condition, $tail));
        }

        return [];
    };

    return call_user_func_array(partial($takewhile), $args);
}
