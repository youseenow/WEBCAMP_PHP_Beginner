<?php

$array_1 = [
    0 => "1st",
    1 => "2nd",
    2 => "3rd",
];
var_dump($array_1);

echo "<br>";

$array_2 = [
    2 => "3rd",
    0 => "1st",
    -100 => -100,
    1 => "2nd",
];
var_dump($array_2);

echo "<br>";

$array_3 = [
    "key1" => "hello",
    0 => "1st",
    -100 => -100,
    "key2" => 3.14,
    "key3" => 999,
    1 => "2nd",
    2 => "3rd",
];
var_dump($array_3);