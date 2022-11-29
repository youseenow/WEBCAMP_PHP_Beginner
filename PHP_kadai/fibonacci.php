<?php



$numbers = [0,1];

$i = 0;
$j = 1;



while($j < 10000) {
    $k = $i + $j;
    $numbers[] = $k;
    $i = $j;
    $j = $k;
}



foreach($numbers as $number) {
    echo "{$number}\n";
}
