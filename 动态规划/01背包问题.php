<?php

$weight = [0,4,3,1,1,2];
$value = [0,3000,2000,1500,2000,3000];

$row = 5; //cargo number
$col = 4; //volume of bag

$dp = [];
for ($i = 0; $i <= $col; $i ++) {
    $dp[0][$i] = 0;
}

for ($i = 0; $i <= $row; $i ++) {
    $dp[$i][0] = 0;
}

for ($i = 1; $i <= $row; $i++) {
    $w = $weight[$i];
    $v = $value[$i];
    for ($j = 1; $j <= $col; $j ++) {
        $pre = $dp[$i-1][$j];
        if ($j < $w) {
            $cur = $pre;
        } else {
            $cur = $dp[$i-1][$j-$w] + $v;
        }
        $dp[$i][$j] = max($pre, $cur);
    }
}

echo 'max value: '.$dp[$row][$col]."\n";
