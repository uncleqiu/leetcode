<?php

class Solution {
    
    /**
     * Method one:
     * using php function
     */
    function lengthOfLastWord($s) {
        return strlen(end(explode(' ', trim($s))));
    }

    /**
     * Method two:
     */
    function lengthOfLastWord2($s) {
        $s = trim($s);
        $len = strlen($s);
        if ($s == '' || $len == 0) {
            return 0;
        }
        $count = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($s[$i] == ' ') {
                $count = 0;
            } else {
                $count++;
            }
        }
        return $count;
    }
}