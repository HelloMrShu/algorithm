<?php

class BinarySearch
{
    public static function search($arr, $key) {
    
        if (empty($arr) || !is_array($arr) || empty($key)) {
            return false;
        }

        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }

        $low = 0;
        $high = $length - 1;

        $mid = -1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);

            if ($arr[$mid] == $key) {
                return $mid;
            }

            if ($arr[$mid] > $key) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
            echo $mid;
        }
        dd($mid);
        return $mid;
    }

}
