<?php

$i = random_int(1,999);
$j = random_int(1,999);



// ========== ▼▼▼ 加算 ▼▼▼ ==========
$k = $i + $j;
echo "{$i} + {$j} = {$k} <br>";

// ========== ▼▼▼ 減算 ▼▼▼ ==========
$k = $i - $j;
echo "{$i} - {$j} = {$k} <br>";

// ========== ▼▼▼ 乗算 ▼▼▼ ==========
$k = $i * $j;
echo "{$i} × {$j} = {$k} <br>";

// ========== ▼▼▼ 除算 ▼▼▼ ==========
$k = $i / $j;
echo "{$i} ÷ {$j} = {$k} <br>";

// ========== ▼▼▼ 剰余 ▼▼▼ ==========
$k = $i % $j;
echo "{$i} % {$j} = {$k} <br>";

// ========== ▼▼▼ 冪乗：**を使う書き方 ▼▼▼ ==========
$k = $i ** 3;
echo "{$i} ** 3 = {$k} <br>";

// ========== ▼▼▼ 冪乗：powを使う書き方 ▼▼▼ ==========
$k = pow($i, 3);
echo "pow({$i}, 3) = $k <br>";