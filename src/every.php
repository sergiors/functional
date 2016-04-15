<?php

function every($fn, $ls)
{
    $keys = array_keys($ls);
    $params = (new \ReflectionFunction($fn))->getParameters();

    return array_reduce($keys, function ($carry, $idx) use ($fn, $ls, $params) {
        $args = $ls[$idx];

        if (isset($params[1])) {
            $carry[$idx] = call_user_func_array($fn, [$idx, $args]);
            return $carry;
        }

        $carry[$idx] = $fn($args);
        return $carry;
    }, []);
}
