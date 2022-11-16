<?php

$array = [
    "key1" => "hello",
    0 => "1st",
    1 => "2nd",
    "key2" => 3.14,
];


foreach($array as $k => $v) {
    echo "{$k} -> {$v}<br>";
}


echo "<br><br>";


foreach($array as $value) {
    echo "{$value}<br>";
}