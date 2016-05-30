<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param mixed $ls
 *
 * @return mixed
 */
function head($xs)
{
    if ([] === $xs
        || '' === $xs
        || null === $xs
    ) {
        return false;
    }

    return $xs[0];
}
