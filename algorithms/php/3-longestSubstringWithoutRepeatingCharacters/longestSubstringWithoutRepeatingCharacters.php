<?php

class Solution {

    /**
     * Method one:
     * run time: 264ms
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        if ($len <= 1) {
            return $len;
        }
        $i = $flag = $maxLen = 0;
        $str = '';
        for ($i; $i < $len; $i++) {
            if (strpos($str, $s[$i]) === false) {
                $str .= $s[$i];
                if (strlen($str) > $maxLen) {
                    $maxLen = strlen($str);
                }
            } else {
                $str = '';
                $i = ++$flag - 1;
            }
        }
        return $maxLen;
    }
}