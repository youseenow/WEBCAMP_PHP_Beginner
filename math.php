<?php

$i = -100;
$j = abs($i);

echo "{$i}の絶対値は{$j}";



echo "<br><br>";



$f = 3.5;
$f_floor = floor($f);
$f_ceil = ceil($f);

echo "{$f}の端数を切り捨てると{$f_floor}<br>";
echo "{$f}の端数を切り上げると{$f_ceil}";