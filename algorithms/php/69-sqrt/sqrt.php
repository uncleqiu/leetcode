<?php

class Solution {

    /**
     * Method one:
     * using php function
     */
    function mySqrt($x) {
        return intval(sqrt($x));
    }

    /**
     * Method two:
     * binary search
     */
    function mySqrt2($x) {
        $head = 1;
        $tail = $x / 2 + 1;
        while ($head <= $tail) {
            $mid = intval(($head + $tail) / 2);
            $rs = $mid * $mid;
            if ($x == $rs) {
                return $mid;
            } else if ($x > $rs) {
                $head = $mid + 1;
            } else {
                $tail = $mid - 1;
            }
        }
        return $tail;
    }
}