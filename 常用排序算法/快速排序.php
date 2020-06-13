<?php

class QuickSort
{
   public static function quick_sort($arr){                                                                   
        $length = count($arr);                                                                          
        if($length <= 1){                                                                               
            return $arr;                                                                                
        } 

        $base = $arr[0];                                                                            

        $left = [];                                                                               
        $right = [];                                                                              

        for($i = 1; $i < $length; $i++){                                                                
            if($base > $arr[$i]){                                                                   
                $left[] = $arr[$i];                                                               
            }else{                                                                                      
                $right[] = $arr[$i];                                                              
            }                                                                                           
        }                                                                                               

        $left = self::quick_sort($left);                                                    
        $right = self::quick_sort($right);                                                  

        return array_merge($left, array($base), $right);
    }
}
