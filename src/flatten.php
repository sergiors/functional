<?php

function flatten($ls)
{
    return array_reduce($ls, function ($carry, $curr) {
        if (is_array($curr)) {
            return array_merge($carry, flatten($curr));
        }

        $carry[] = $curr;
        return $carry;
    }, []);
}
