<?php

function bai1(array $array)
{
    $length = count($array);
    if ($length % 3) {
        return;
    }
    $array1 = array_splice($array, 0, $length / 3);
    $array2 = array_splice($array, 0, $length / 3);
    $array3 = array_splice($array, 0, $length / 3);
    $newArray = array();
    for($i = 0; $i < $length/3; $i++){
        $newArray[] = $array1[$i];
        $newArray[] = $array2[$i];
        $newArray[] = $array3[$i];
    }

    return $newArray;
}
