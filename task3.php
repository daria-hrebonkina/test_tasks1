<?php

function arrayReverseKeys($a)
{
    $keys = array_keys($a);
    $newArray = [];
    $count = count($keys);
    for($i = 0; $i < $count; $i++) {
        $newArray[$keys[$count - 1 - $i]] = $a[$keys[$i]];
    }
    return $newArray;
}