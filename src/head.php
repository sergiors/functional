<?php

namespace Sergiors\Functional;

const head = '\Sergiors\Functional\head';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param mixed $xs
 *
 * @return mixed
 */
function head($xs)
{
    if ([] === $xs
        || '' === $xs
        || null === $xs
    ) {
        return null;
    }

    if (is_array($xs)) {
        return array_values($xs)[0];
    }

    return $xs[0];
}
