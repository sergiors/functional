<?php

function curry($fn)
{
    $args = tail(func_get_args());

    return function () use ($fn, $args) {
        $args = array_merge($args, func_get_args());
        return call_user_func_array($fn, $args);
    };
}
