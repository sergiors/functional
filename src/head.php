<?php

namespace Sergiors\Functional;

const head = __NAMESPACE__.'\head';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $xss
 *
 * @return mixed
 */
function head(array $xss)
{
    return [] === $xss
        ? null
        : array_values($xss)[0];
}
