<?php

class SelectSort
{
    public static function select_sort($arr){                                                                   
        $length = count($arr);                                                                          
        if(!isset($arr) || $length <= 1){                                                   
            return $arr;                                                                  
        } 

        for ($i = 0; $i < $length; $i ++) {
            $min = $i;
            for ($j = $i+1; $j < $length; $j ++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
        return $arr;
    }

}
