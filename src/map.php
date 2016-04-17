<?php

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 * 
 * @param \Closure $fn
 * @param array    $ls
 *
 * @return array
 */
function map($fn, $ls)
{
    return array_map($fn, $ls);
}
