<?php

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 * 
 * Performs right-to-left function composition.
 * The rightmost function may have any arity; the remaining functions must be unary.
 *
 * @return mixed
 */
function compose()
{
    $args = func_get_args();
    return call_user_func_array('pipe', array_reverse($args));
}
