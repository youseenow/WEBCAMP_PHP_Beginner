<?php

for($i = 1; $i <= 9; ++$i) {
    echo "{$i}の段<br>";
    for($j = 1; $j <= 9; ++$j) {
        $k = $i * $j;
        echo "{$i} * {$j} = {$k}<br>";
    }
    echo "<br><br>";
}