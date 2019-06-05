<?php

function maxArea($height) {
    $len = sizeof($height);
    if ($len <= 2) return min($height);
    $i = 0;
    $j = $len - 1;
    $maxArea = 0;
    while ($i < $j) {
        $area = min($height[$i], $height[$j]) * ($j - $i);
        $maxArea = $maxArea > $area ? $maxArea : $area;
        if ($height[$i] < $height[$j]) {
            $i++;
        } else {
            $j--;
        }
    }
    return $maxArea;
}