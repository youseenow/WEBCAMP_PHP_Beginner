<?php

function numToDouble(int $i): int {
    $ret = $i * 2;
    return $ret;
}

$num = numToDouble(10);
echo "10を2倍にしたら{$num}になった";


echo "<br><br>";


function numAdd(int $a,int $b): int {
    $ret = $a + $b;
    return $ret;
}

$num = numAdd(5,6);
echo "5と6を足したら{$num}になった";