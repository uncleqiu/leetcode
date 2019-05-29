<?php

function intToRoman($num) {
    $arr = ['1000'=>'M', '900'=>'CM', '500'=>'D', '400'=>'CD', '100'=>'C', '90'=>'XC', '50'=>'L', '40'=>'XL', '10'=>'X', '9'=>'IX', '5'=>'V', '4'=>'IV', '1'=>'I'];
    $romanStr = '';
    foreach ($arr as $ints => $roman) {
        while ($num >= $ints) {
            $num -= $ints;
            $romanStr .= $roman;
        }
    }
    return $romanStr;
}