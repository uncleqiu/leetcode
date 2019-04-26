<?php

class Solution {

    function searchInsert($nums, $target) {
        foreach ($nums as $key => $val) {
            if ($val == $target || $target < $val) {
                return $key;
            } 
        }
        return count($nums);
    }
}