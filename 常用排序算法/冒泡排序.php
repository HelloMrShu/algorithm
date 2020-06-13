<?php

class BubbleSort
{
   public static function bubble_sort($arr){                                                                   
        $length = count($arr);                                                                          
        if($length <= 1){                                                                               
            return $arr;                                                                                
        }                                                                                               

        for($i = 1; $i < $length; $i ++) {
            for($j = 0; $j < $length - $i; $j ++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
        }
        return $arr;
    }
}
