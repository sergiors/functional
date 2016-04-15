<?php

function map($fn, $ls)
{
    return array_reduce($ls, function ($carry, $item) use ($fn) {
        $carry[] = $fn($item);
        return $carry;
    }, []);
}
