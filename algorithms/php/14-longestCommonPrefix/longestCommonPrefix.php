<?php

class Solution {
    
    /**
     * Method one:
     */
    function longestCommonPrefix($strs) {
        $temp = [];
        foreach ($strs as $key => $val) {
            $val = str_split($val);
            $temp = $key == 0 ? $val : array_intersect_assoc($temp, $val);
        }
        $result = '';
        $i = 0;
        foreach ($temp as $key => $val) {
            if ($key <> $i) {
                break;
            }
            $i++;
            $result .= $val;
        }
        return $result;
    }

    /**
     * Method two:
     */
    function longestCommonPrefix2($strs) {
        if (empty($strs)) {
            return '';
        }
        $size = count($strs);
        if ($size == 1) {
            return $strs[0];
        }
        $temp = '';
        $firstStr = $strs[0];
        for ($i = 1; $i < $size; $i++) {
            for ($j = 0; $j < strlen($firstStr); $j++) {
                if (!isset($strs[$i][$j]) || $strs[$i][$j] != $firstStr[$j]) {
                    break;
                }
                $temp .= $firstStr[$j];
            }
            $firstStr = $temp;
            if (isset($strs[$i+1])){
                $temp = '';
            }
        }
        return $temp;
    }
}