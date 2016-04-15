<?php

function has($prop)
{
    return function ($ls) use ($prop) {
        if (is_object($ls)) {
            $ls = (array) $ls;
        }

        return array_key_exists($prop, $ls);
    };
}
