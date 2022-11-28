<?php



$i = 0;
$j = 1;
$k = 0;


while($i < 10000) {
    echo "{$k}<br>";
    $k = $i + $j;
    $i = $j;
    $j = $k;
}

