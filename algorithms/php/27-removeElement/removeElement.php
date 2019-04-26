<?php

class Solution {

    /**
     * Method one:
     */
    function removeElement(&$nums, $val) {
        foreach ($nums as $key => $num) {
            if ($num == $val) {
                unset($nums[$key]);
            }
        }
        return count($nums);
    }

    /**
     * Method two:
     */
    function removeElement2(&$nums, $val) {
        $nums = array_diff($nums, [$val]);
        return count($nums);
    }
}