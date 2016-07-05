<?php

namespace Sergiors\Functional;

const tail = __NAMESPACE__.'\tail';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $xss
 *
 * @return array
 */
function tail(array $xss)
{
    return array_slice($xss, 1);
}
