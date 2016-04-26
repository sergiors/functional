<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $ls
 *
 * @return array
 */
function head(array $ls)
{
    return array_shift($ls);
}
