<?php
    
    function isPalindrome($x) {
        $str = (string)$x;
        return strrev($str) == $str;
    }