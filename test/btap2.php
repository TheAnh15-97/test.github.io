<?php 
    function bai2 (array $array) {
        $length = count($array);
        if($length < 2) {
            return;
        }

        if($length === 2) {
            return $array[0] + $array[1];
        }
        rsort($array);

        return $array[0] + $array[1]; 
    }

    print_r(bai2([1,2,5,4,3,6]));