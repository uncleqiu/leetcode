<?php

class Solution {

    function strStr($haystack, $needle) {
        if ($haystack == $needle) {
            return 0;
        }
        $hLen = strlen($haystack);
        $nLen = strlen($needle);
        if ($nLen == 0) {
            return 0;
        }
        if ($hLen == 0 || $nLen > $hLen) {
            return -1;
        }
        for ($i = 0; $i < $hLen; $i++) {
            if (substr($haystack, $i, $nLen) == $needle) {
                return $i;
            }            
        }
        return -1;
    }
}