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

    return $ls[0];
}
