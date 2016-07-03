<?php

namespace Sergiors\Functional;

const flatten = '\Sergiors\Functional\flatten';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $xs
 *
 * @return mixed
 */
function flatten(array $xs)
{
    return array_reduce($xs, function ($carry, $x) {
        if (is_array($x)) {
            return array_merge($carry, flatten($x));
        }

        return array_merge($carry, [$x]);
    }, []);
}
