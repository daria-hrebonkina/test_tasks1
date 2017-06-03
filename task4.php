<?php

function myStrRev($s)
{
    $strlen = strlen($s);
    $mass = '';
    for($i = 0; $i < $strlen; $i++) {
        $mass = $s[$i] . $mass;
    }
    return $mass;
}