<?php

function convert($s, $numRows) {
    $len = strlen($s);
    if ($len <= $numRows || $numRows <= 1) return $s;
    $temp = [];
    $key = 1;
    $flag = true;
    for ($i = 0; $i < $len; $i++) {
        if (!isset($temp[$key])) {
            $temp[$key] = $s[$i];
        } else {
            $temp[$key] = $temp[$key] . $s[$i];
        }
        if ($numRows == $key) {
            $flag = false;
        } else if ($key == 1) {
            $flag = true;
        }
        if ($flag) {
            $key++;
        } else {
            $key--;
        }
    }
    $str = '';
    foreach ($temp as $key => $val) {
        $str .= $val;
    }
    return $str;
}