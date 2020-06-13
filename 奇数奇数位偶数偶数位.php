<?php 

/**
 * 给定2n长度的数组，要求偶数放偶数位置，奇数放奇数位置
*/

class OddEven
{
	public static function odd_even_sort($arr)
	{
		if (!is_array($arr)) {
	        return false;
	    }

	    $odd = $even = 0;
	    foreach ($arr as $item) {
	        if ($item % 2 == 0) {
	            ++$even;
	        } else {
	            ++$odd;
	        }
	    }

	    if ($odd != $even) {
	        return false;
	    }

	    $op = 0;
	    $ep = 1;
	    $len = count($arr);

	    while (true) {
            while (isset($arr[$op]) and $arr[$op] % 2 == 0) {
                $op += 2;
            }
            while (isset($arr[$ep]) and $arr[$ep] % 2 != 0) {
                $ep += 2;
            }

            if ($op >= $len || $ep >= $len) {
                break;
            }

	        $temp = $arr[$op];
	        $arr[$op] = $arr[$ep];
	        $arr[$ep] = $temp;

	        $op += 2;
	        $ep += 2;
	    }
	    return $arr; 
	}
}