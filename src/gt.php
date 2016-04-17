<?php

function gt()
{
    $args = func_get_args();
    
    $gt = function ($a, $b) {
        return $a > $b;
    };

    return call_user_func_array(curry($gt), $args);
}
