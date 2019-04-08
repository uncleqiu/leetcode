<?php

class Solution {

    /**
     * Method one:
     * @param Integer $x
     * @return Integer
     */
    function reverse1($x) {
        $flag = $str = '';
        $x =  str_split($x);
        foreach ($x as $k => $v) {
            if ($v == '-') {
                $flag = $v;
				continue;
            }
            $str = $v . $str;
        }
        $rs = (int)($flag . $str);
        if ($rs < pow(-2, 31) || $rs > pow(2, 31) -1) {
            return 0;
        }
        return $rs;
    }
	
	/**
     * Method two:
     * @param Integer $x
     * @return Integer
     */
	function reverse2($x) {
        $num = (int)strrev((string)abs($x));
        if ($x >= 0 && $num <= pow(2, 31) - 1) {
            return $num;
        }
        if ($x < 0 && $num < pow(2, 31)) {
            return -$num;
        }
        return 0;
    }
}