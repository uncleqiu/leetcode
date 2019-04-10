<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $num = 0;
        $len = strlen($s);
        $romanArray = ['I'=>1,'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000];
        for ($i = 0; $i < $len; $i++) {
            $curr = isset($romanArray[$s[$i]]) ? $romanArray[$s[$i]] : 0;
            $next = isset($s[$i+1]) && isset($romanArray[$s[$i+1]]) ? $romanArray[$s[$i+1]]: 0;
            if ($curr >= $next) {
                $num += $curr;
            } else {
                $num -= $curr;
            }
        }
        return $num;
    }
}

