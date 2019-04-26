<?php

class Solution {

    /**
     * Method one:
     */
    function isValid($s) {
        if ($s == '') return true;
        $strLen = strlen($s);
        $arr = ['('=>')', '{'=>'}', '['=>']'];
        if (!isset($arr[$s[0]])) {
            return false;
        }
        $temp = '';
        for ($i = 0; $i < $strLen; $i++) {
            if (!isset($arr[$s[$i]]) && !in_array($s[$i], array_values($arr))) {
                return false;
            }
            if ($temp == '') {
                $temp .= $s[$i];
            } else {
                if (isset($arr[substr($temp, -1)])) {
                    $temp = $arr[substr($temp, -1)] == $s[$i] ? substr($temp, 0 ,-1) : ($temp .= $s[$i]);
                }
            }
        }
        return empty($temp);
    }

    /**
     * Method two:
     * using like stack
     */
    function isValid2($s) {
        if ($s == '') return true;
        $arr = ['('=>')', '{'=>'}', '['=>']'];
        if (!isset($arr[$s[0]])) {
            return false;            
        }
        $len = strlen($s);
        $end = [];
        for ($i = 0; $i < $len; $i++) {
            if (isset($arr[$s[$i]])) {
                $end[] = $arr[$s[$i]];
            } else if (end($end) == $s[$i]) {
                array_pop($end);
            } else {
                return false;
            }
        }
        return empty($end);
    }
}