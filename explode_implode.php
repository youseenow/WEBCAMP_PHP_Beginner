<?php

$base_string = "Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の文字列<br>";
var_dump($base_string);

echo "<br><br>";

$exploded_array = explode(";",$base_string);
echo "explodeした配列<br>";
var_dump($exploded_array);

echo "<br><br>";

$imploded_string = implode(",",$exploded_array);
echo "implodeした文字列<br>";
var_dump($imploded_string);