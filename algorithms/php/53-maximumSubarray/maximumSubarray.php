<?php

class Solution {

    function maxSubArray($nums) {
        $curr = $max = $nums[0];
        $len = count($nums);
        if ($len == 1) {
            return $max;
        }
        for ($i = 1; $i < $len; $i++) {
            if ($curr + $nums[$i] > $nums[$i]) {
                $curr = $curr + $nums[$i];
                $max = max($max, $curr);
            } else {
                $max = max($max, $curr, $curr + $nums[$i], $nums[$i]);
                $curr = $nums[$i];
            }
        }
        return $max;
    }
}