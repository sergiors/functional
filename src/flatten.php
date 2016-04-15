<?php

function flatten($ls)
{
    if ($ls instanceof \ArrayIterator) {
        $ls = flatten($ls->getArrayCopy());
    }

    return array_reduce($ls, function ($carry, $item) {
        if (is_array($item) || $item instanceof \ArrayIterator) {
            return array_merge($carry, flatten($item));
        }

        $carry[] = $item;
        return $carry;
    }, []);
}
