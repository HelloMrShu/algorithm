<?php

/**
* 堆排序算法
* 构建：时间复杂度O(nlogn)
* 场景：解决topK问题（即先构建大顶堆或小顶堆，然后将根与最后一个未swap的节点交换，并且对交换后的根进行堆化）
*/
function heapify(&$arr, $n, $i) {
    if ($i >= $n) return;

    $c1 = 2 * $i + 1;
    $c2 = 2 * $i + 2;

    $max = $i;
    if ($c1 < $n && $arr[$c1] > $arr[$max])
        $max = $c1;
    if ($c2 < $n && $arr[$c2] > $arr[$max])
        $max = $c2;

    if ($max != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$max]; 
        $arr[$max] = $temp;
        heapify($arr, $n, $max);
    }
}

function build_heap(&$arr, $n) {
    $max = floor(($n - 1) / 2);

    for ($i = $max; $i >= 0; $i --) {
        heapify($arr, $n, $i);
    }
}

function heap_sort(&$arr, $n) {
    build_heap($arr, $n);
    for ($i = $n - 1; $i >= 0; $i--) {
        $temp = $arr[$i];
        $arr[$i] = $arr[0]; 
        $arr[0] = $temp;
        heapify($arr, $i, 0);
    }
}

$arr = [2,5,3,1,10,4];

echo "\n";
heap_sort($arr, count($arr));
echo json_encode($arr);
echo "\n\n";
