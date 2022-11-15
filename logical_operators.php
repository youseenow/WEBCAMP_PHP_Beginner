<?php

echo "論理演算子の確認<br>";
var_dump(true && false);
echo "<br>";
var_dump(true || false);


echo "<br><br>";


$age = 20;
$point = 499;


echo "「かつ」の場合<br>";
var_dump( ($age >= 20)&&($point >=500 ) );


echo "<br><br>";


echo "「または」の場合<br>";
var_dump( ($age >= 20)||($point >=500) );