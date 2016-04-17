<?php

function every($fn, $ls)
{
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
}
