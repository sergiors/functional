<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $ls
 *
 * @return array
 */
function tail(array $xs)
{
    return array_slice($xs, 1);
}
