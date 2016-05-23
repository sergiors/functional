<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param mixed $ls
 *
 * @return mixed
 */
function head($ls)
{
    if ([] === $ls
        || '' === $ls
        || null === $ls
    ) {
        return false;
    }

    if (is_string($ls)) {
        return $ls[0];
    }

    return array_shift($ls);
}
