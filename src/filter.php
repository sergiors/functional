<?php

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param \Closure $fn
 * @param array    $ls
 *
 * @return array
 */
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
