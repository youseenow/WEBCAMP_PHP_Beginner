<?php

for($i = 0; $i <= 10; ++$i) {
    echo "{$i}は奇数かな？<br>";
    if(($i % 2) === 1) {
        continue;
    }
    echo "偶数でした！<br>";
}


echo "<br><br>";


$i = 0;

while($i < 10) {
    echo "{$i}<br>";
    if($i >= 5) {
        echo "{$i}なのでループを抜けます<br>";
        break;
    }
    $i++;
}