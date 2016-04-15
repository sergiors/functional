<?php

function every($fn, $ls)
{
    $ks = array_keys($ls);
    $ps = (new \ReflectionFunction($fn))->getParameters();

    return array_reduce($ks, function ($carry, $idx) use ($fn, $ls, $ps) {
        $args = $ls[$idx];

        if (isset($ps[1])) {
            $carry[$idx] = call_user_func_array($fn, [$idx, $args]);
            return $carry;
        }

        $carry[$idx] = $fn($args);
        return $carry;
    }, []);
}
