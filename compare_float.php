<?php

echo "普通に比較<br>";
$f = 0.3;
var_dump($f === 0.3);


echo "<br><br>";


echo "0.1+0.2と0.3を比較<br>";
$f = 0.1 + 0.2;
var_dump($f === 0.3);


echo "<br><br>";


echo "0.1+0.2 と 0.3 を printf で比較<br>";
printf("0.1 + 0.2 : %f", $f);
echo "<br>";
printf("0.3 : %f", 0.3);


echo "<br><br>";


echo "0.1+0.2 と 0.3 を高精度の printf で比較<br>";
printf("0.1 + 0.2 : %.32f",$f);
echo "<br>";
printf("0.3 : %.32f",0.3);


echo "<br><br>";


echo "0.1 + 0.2 と 0.3 の現実的な比較<br>";
define('FLOAT_PRECISION', 0.000001);
var_dump( abs($f - 0.3) < FLOAT_PRECISION);