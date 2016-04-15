<?php

function filter($fn, $ls)
{
    return array_reduce($ls, function ($carry, $curr) use ($fn) {
        if ($fn($curr)) {
            $carry[] = $curr;
            return $carry;
        }

        return $carry;
    }, []);
}
