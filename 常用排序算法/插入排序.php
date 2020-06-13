<?php

class InsertSort
{
    const BASE = 1;

    public static function insert_sort($arr){                                                                   
        $length = count($arr);                                                                          
        if(!isset($arr) || $length <= 1){                                                                               
            return $arr;                                                                  
        } 

        for($i = self::BASE; $i < $length; $i ++) {
            $temp = $arr[$i];

            for ($j = $i; $j >0 && $arr[$j-1] > $temp; $j --) {
                $arr[$j] = $arr[$j-1];
            }   
            $arr[$j] = $temp;
        }   
        return $arr;
    }

}
