<?php

$i = 1;

echo "等しいかどうか<br>";
var_dump($i === 1);
echo "<br>";
var_dump($i === 2);


echo "<br><br>";


echo "等しくないかどうか<br>";
var_dump($i !== 1);
echo "<br>";
var_dump($i !== 2);


echo "<br><br>";


echo "等しいかどうか<br>";
$s = "abc";
var_dump($s === "abc");
echo "<br>";
var_dump($s === "ab");
echo "<br>";
var_dump($s === "a");


echo "<br><br>";


echo "== と === の確認 その1<br>";
var_dump($i == 1);
echo "<br>";
var_dump($i === 1);


echo "<br><br>";


echo "== と === の確認 その2<br>";
var_dump($i == "1");
echo "<br>";
var_dump($i === "1");


echo "<br><br>";

echo "2a問題の確認<br>";
$i = 2;
var_dump($i == "2a");
echo "<br>";
var_dump($i === "2a");





