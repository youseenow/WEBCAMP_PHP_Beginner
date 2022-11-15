<?php

$i = 1;

switch($i) {
    case 0:
        echo "iは0です";
        break;
    case 1:
        echo "iは1です";
        break;
    default:
        echo "iは0と1以外です";
        break;
}


echo "<br>";


$i = 2;

switch($i) {
    case "2a":
        echo "iは2aです";
        break;
    case "2":
        echo "iは2（string）です";
        break;
    case 2:
        echo "iは2（int）です";
        break;
}