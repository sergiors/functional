<?php

namespace Sergiors\Functional;

const flatten = __NAMESPACE__.'\flatten';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $xss
 *
 * @return mixed
 */
function flatten(array $xss)
{
    return array_reduce($xss, function ($carry, $x) {
        return is_array($x)
            ? array_merge($carry, flatten($x))
            : array_merge($carry, [$x]);
    }, []);
}
