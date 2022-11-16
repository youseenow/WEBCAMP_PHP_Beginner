<?php

$a = 10;
echo "global:a is {$a}";



echo "<br><br>";



function myFunc() {
    $b = 999;
    echo "in function:b is {$b}";
}

myFunc();