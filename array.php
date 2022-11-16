<?php

$awk = [123];
var_dump($awk);

echo "<br>";

$awk2 = [999, "hello", 3.14];
var_dump($awk2);

echo "<br>";

var_dump($awk2[0]);

echo "<br>";

$awk2[0] = 654321;
var_dump($awk2[0]);

echo "<br>";
$awk[] = 1.41421356;
$awk[] = "string value";
var_dump($awk);