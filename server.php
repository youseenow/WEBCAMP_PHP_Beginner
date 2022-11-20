<?php

function h(string $s):string {
    return htmlspecialchars($s, ENT_QUOTES);
}


echo "ブラウザ（User agent）は".h($_SERVER['HTTP_USER_AGENT'])."です<br>";
// echo "接続元IPは".h($_SERVER['REMOTE_ADDR'])."です<br>";
// echo "本当の接続元IPは".h($_SERVER['HTTP_X_FORWARDED_FOR'])."です<br>";

$from_ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
echo "本当の接続元IPは".h($from_ip)."です";