<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $ls
 *
 * @return array
 */
function tail(array $ls)
{
    return array_slice($ls, 1);
}
