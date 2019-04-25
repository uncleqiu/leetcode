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
}