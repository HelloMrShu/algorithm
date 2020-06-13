<?php

//weight and value of cargo
$weight = [0,4,3,1,1];
$value = [0,3000,2000,1500,2000];

//row: cargo number
//col: volume of bag 
$row = 4;
$col = 4;

//init
$dp = [];
for ($i = 0; $i <= $col; $i ++) {
    $dp[0][$i] = 0;
}

for ($i = 0; $i <= $row; $i ++) {
    $dp[$i][0] = 0;
}

//max value index
$x = 0;
$y = 0;
$select = [];

for ($n = 1; $n <= $row; $n ++) {

    $w = $weight[$n];
    $v = $value[$n];

    for ($m = 1; $m <= $col; $m ++) {

        $pre = $dp[$n-1][$m];
        if ($m < $w) {
            $dp[$n][$m] = $pre;
        } else {
            $cur = $dp[$n-1][$m-$w] + $v;

            if ($cur >= $pre) {
                $select[$n][$m] = 1;
                $dp[$n][$m] = $cur;

            } else {
                $select[$n][$m] = 0;
                $dp[$n][$m] = $pre;
            }
        }

        $x = $n;
        $y = $m;
    }
}

echo 'max value: '.$dp[$x][$y]."\n";
echo json_encode($select)."\n";
