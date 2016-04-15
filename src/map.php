<?php

function map($fn, $ls)
{
    return array_reduce($ls, function ($carry, $curr) use ($fn) {
        $carry[] = $fn($curr);
        return $carry;
    }, []);
}
