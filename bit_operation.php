<?php

$i = random_int(0,255);
$j = random_int(0,255);

// AND
$k = $i & $j;
printf("%x & %x = %x \n", $i, $j, $k);

echo "<br>";

// OR
$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);

echo "<br>";

// XOR
$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);

echo "<br>";

//NOT
$k = ~ $i;
printf("~%x = %x \n", $i, $k);