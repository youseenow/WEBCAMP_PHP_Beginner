<?php

$s = "Hello";
var_dump($s);

echo $s[0], "\n";

echo "<br>";

$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0];

echo "<br>";

$num_i = 123;
$num_s ="123";
var_dump($num_i);
var_dump($num_s);

echo "<br>";

$double_s = "mun is {$num_i} \n";
$single_s = 'mun is {$num_i} \n';
var_dump($double_s);
echo "<br>";
var_dump($single_s);