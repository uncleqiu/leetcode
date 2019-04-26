<?php

class Solution {

    /**
     * Method one:
     */
    function removeDuplicates(&$nums) {
        $nums = array_unique($nums);
        return count($nums);
    }

    /**
     * Method two:
     */
    function removeDuplicates2(&$nums) {
        $nums = array_keys(array_flip($nums));
        return sizeof($nums);
    }

    /**
     * Method three:
     */
    function removeDuplicates3(&$nums) {
        $nums = array_flip(array_flip($nums));
        return count($nums);
    }

    /**
     * Method four:
     */
    function removeDuplicates4(&$nums) {
        $len = count($nums);
        if ($len <= 1) {
            return $len;
        }
        $pos = 0;
        for ($i = 0; $i < ($len - 1); $i++) {
            if ($nums[$i] != $nums[$i+1]) {
                $nums[++$pos] = $nums[$i+1];
            }
        }
        return $pos + 1;
    }
}