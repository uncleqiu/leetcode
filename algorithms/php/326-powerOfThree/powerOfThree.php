<?php

/**
 * Method one:
 * Loop iteration of multiplication
 */
function isPowerOfThree($n) {
    if ($n == 1) return true;
    $m = 1;
    while ($m < $n) {
        $m *= 3;
        if ($m == $n) return true;
    }
    return false;
}

/**
 * Method two:
 * Loop iteration of division
 */
function isPowerOfThree2($n) {
    if ($n == 1) return true;
    while ($n > 3) {
        $n /= 3;
    }
    return $n == 3;
}