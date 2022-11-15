<?php


if(true) {
    echo "trueだとここを通る？<br>";
}
if(false) {
    echo "falseだとここを通る？<br>";
}


$age = 20;

if($age >= 20) {
    echo "成人です<br>";
}
if($age < 20) {
    echo "未成年です<br>";
}



if($age >= 20) {
    echo "成人です<br>";
} else {
    echo "未成年です<br>";
}



if($age > 20) {
    echo "成人<br>";
} elseif($age === 20) {
    echo "新成人おめでとう！！<br>";
} else {
    echo "未成年";
}