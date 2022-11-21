<?php

class Myclass {
    
    const HOGE = 'string';
    
    public function __construct() {
        echo "コンストラクタが動いた<br>";
    }
    
    public function __destruct() {
        echo "デストラクタが動いた<br>";
    }
    
}


var_dump(Myclass::HOGE);

$obj = new Myclass();