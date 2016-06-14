<?php

namespace Sergiors\Functional;

function concat(/*$args*/)
{
    $args = func_get_args();

    return call_user_func_array(partial('array_merge'), $args);
}
