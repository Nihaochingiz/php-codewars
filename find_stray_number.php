<?php

function stray($arr)
{

    if ($arr[0] == $arr[1]) {
        
        foreach ($arr as $elem) {
            if ($elem != $arr[0]) {
                return $elem;
            }
        }
    } else {
        return ($arr[0] == $arr[2]) ? $arr[1] : $arr[0];
    }
}

echo(stray([17, 17, 3, 17, 17, 17, 17]));