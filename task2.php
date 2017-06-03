<?php

function checkBrackets($s)
{
    $length = strlen($s);
    $stack = [];
    for($i = 0; $i < $length; $i++) {
        if($s[$i] == '(' || $s[$i] == '[') {
            array_push($stack, $s[$i]);
        } elseif($s[$i] == ')') {
            if(array_pop($stack) !== '(') {
                return false;
            }
        } elseif($s[$i] == ']') {
            if(array_pop($stack) !== '[') {
                return false;
            }
        }
    }
    if(count($stack)) {
        return false;
    }
    return true;
}
