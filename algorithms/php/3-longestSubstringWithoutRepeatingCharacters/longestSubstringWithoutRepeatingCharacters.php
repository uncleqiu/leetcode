<?php

class Solution {

    /**
     * Method one:
     * leetcode run time: 264ms
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

    /**
     * Method two:
     * leetcode run time: 16ms
     */
    function lengthOfLongestSubstring2($s) {
        $strLen = strlen($s);
        $temp = [];
        $start = $len = $maxLen = 0;
        for ($i = 0; $i < $strLen; $i++) {
            $curr = $s[$i];
            if (isset($temp[$curr]) && $temp[$curr] >= $start) {
                if ($maxLen > $len) {
                    $len = $maxLen;
                }
                $start = $temp[$curr] + 1;
                $maxLen = $i - $start;
            }
            $maxLen++;
            $temp[$curr] = $i;
        }
        return max($maxLen, $len);
    }
    

}