<?php

class Solution {

    function plusOne($digits) {
        $len = count($digits);
        for ($i = 1; $i <= $len; $i++) {
            $index = $len - $i;
            if ($digits[$index] <> 9) {
                $digits[$index] = $digits[$index] + 1;
                break;
            } else {
                $digits[$index] = 0;
                if ($index == 0) {
                    array_unshift($digits, 1);
                }
            }
        }
        return $digits;
    } 
}