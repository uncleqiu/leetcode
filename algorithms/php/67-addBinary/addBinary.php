<?php

class Solution {
    
    function addBinary($a, $b) {
        $aLen = strlen($a);
        $bLen = strlen($b);
        $diff = $aLen - $bLen;
        if ($diff > 0) {
            $b = str_repeat('0', $diff) . $b;
        } else if ($diff < 0) {
            $a = str_repeat('0', abs($diff)) . $a;
        }
        $i = strlen($a) - 1;
        $flag = false;
        $sum = '';
        for ($i; $i >= 0; $i--) {
            $add = $a[$i] + $b[$i];
            $add = $flag ? ($add + 1) : $add;
            if ($add > 2) {
                $sum = '1' . $sum;
                $flag = true;
            } else if ($add > 1) {
                $sum = '0' . $sum;
                $flag = true;
            } else {
                $sum = $add . $sum;
                $flag = false;
            }
        }
        if ($flag) {
            $sum = '1' . $sum;
        }
        return $sum;
    }
}
