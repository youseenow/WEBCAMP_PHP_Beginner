<?php

// 整数型
$i = 123;
var_dump($i);

echo "<br>";

var_dump(PHP_INT_MAX);

echo "<br>";

var_dump(PHP_INT_MIN);

echo "<br>";

$over_max = PHP_INT_MAX + 1;
var_dump($over_max);

echo "<br>";

$under_min = PHP_INT_MIN - 1;
var_dump($under_min);