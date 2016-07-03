<?php

namespace Sergiors\Functional;

const dropwhile = __NAMESPACE__.'\dropwhile';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return array
 */
function dropwhile(/* ...$args */)
{
    $args = func_get_args();

    $dropwhile = function (callable $condition, array $xss) {
        if ([] === $xss) {
            return [];
        }

        $head = head($xss);
        $tail = tail($xss);

        if ($condition($head)) {
            return dropwhile($condition, $tail);
        }

        return $xss;
    };

    return call_user_func_array(partial($dropwhile), $args);
}
