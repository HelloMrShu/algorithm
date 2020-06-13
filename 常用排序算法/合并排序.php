<?php

class MergeSort
{
    const BASE = 1;

    /*
     * 合并有序数组
     * 合并两个有序序列为一个有序序列
     * 时间复杂度O(nlogn)
     * 空间复杂度O(n)
    */
    public static function merge_sort($dataA, $dataB){                                                                   
        $lenA = count($dataA);                                                                          
        $lenB = count($dataB);                                                                          

        if($lenA < 1 || $lenB < 1){                                                           
            return false;                                                          
        } 

        $ret = [];
        for ($i = 0, $j = 0; $i < $lenA, $j < $lenB;) {
            if ($dataA[$i] <= $dataB[$j]) {
                $ret[] = $dataA[$i];
                $i++;
            } else {
                $ret[] = $dataB[$j];
                $j++;
            }
        }

        if ($i < $lenA) {
            $ret = array_merge($ret, array_slice($dataA, $i));
        }

        if ($j < $lenB) {
            $ret = array_merge($ret, array_slice($dataB, $j));
        }
        return $ret;
    }


}
