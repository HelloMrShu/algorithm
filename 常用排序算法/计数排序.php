<?php

class CountSort
{
    const BASE = 1;

    /*
     * 针对一定范围的数字统计，并按序输出
     * 例如：整个学校的学生年龄(0, 100)
     */
    public static function count_sort($arr){                                                                   
        $length = count($arr);                                                                          
        if(!isset($arr) || $length <= 1){                                                                               
            return $arr;                                                                  
        } 

        $ret = [];
        foreach($arr as $item) {
            if (isset($ret[$item])) {
                ++ $ret[$item];
            } else {
                $ret[$item] = self::BASE;
            }
        }

        $max = max($arr);

        $data = [];
        for($i = 1; $i <= $max; $i++) {
            if (!empty($ret[$i])) {
                for($j = 0; $j < $ret[$i]; $j++) {
                    $data[] = $i;
                }
            }
        }
        return $data;
    }

}
