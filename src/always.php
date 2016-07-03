<?php

namespace Sergiors\Functional;

const always = '\Sergiors\Functional\always';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function always($x)
{
    return function () use ($x) {
        return $x;
    };
}
