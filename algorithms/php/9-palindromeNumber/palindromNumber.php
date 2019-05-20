<?php
    
    /**
     * Method one:
     * using php function
     */
    function isPalindrome($x) {
        $str = (string)$x;
        return strrev($str) == $str;
    }

    /**
     * Method two:
     */
    function isPalindrome2($x) {
        if ($x < 0) {
            return false;
        }
        $x = (string)$x;
        $len = strlen($x);
        $str = '';
        for ($i = 0; $i < $len; $i++) {
            $str = $x[$i] . $str;
        }
        return $x == $str;
    }
