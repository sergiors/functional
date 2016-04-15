<?php

function filter($fn, $ls)
{
    return array_reduce($ls, function ($carry, $item) use ($fn) {
        if ($fn($item)) {
            $carry[] = $item;
            return $carry;
        }

        return $carry;
    }, []);
}
