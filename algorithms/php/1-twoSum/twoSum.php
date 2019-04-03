<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums = [], $target) {
        if (count($nums) < 2) {
            return '';
        }
        $temp = [];
        foreach ($nums as $key => $val) {
            $diff = $target - $val;
            if (isset($temp[$val])){
                return [$temp[$val], $key];
            }
            $temp[$diff] = $key;
        }
        return '';
    }
}