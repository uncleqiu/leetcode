<?php

class Solution {

    function countAndSay($n) {
        $temp = [];
        for ($i = 1; $i <= $n; $i++) {
            if (!isset($temp[$i-1])) {
                $temp[$i] = '1';
            } else {
                $temp[$i] = $this->_getSayStr($temp[$i-1]);
            }
        }
        return $temp[$n];
    }

    function _getSayStr($prev) {
        $len = strlen($prev);
        $str = '';
        $count = 1;
        for ($i = 0; $i < $len; $i++) {
            if ($prev[$i] == $prev[$i+1]) {
                $count++;
            } else {
                $str .= $count . $prev[$i];
                $count = 1;
            }
        }
        return $str;
    }
}