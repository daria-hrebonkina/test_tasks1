<?php

function searchInArray($a, $b)
{
    $first = 0;
    $last = count($a) - 1;
    $result = false;
    while($first < $last)
    {
        $middle = floor($first + ($last - $first) / 2);
        if($b <= $a[$middle]) {
            $last = $middle;
        } else {
            $first = $middle + 1;
        }
    }
    if($a[$last] == $b) {
        $result = $a[$last];
    }
    return $result;
}