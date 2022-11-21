<?php

trait 部品 {
    public function トレイトのメソッド() {
        echo "トレイトのメソッド<br>";
    }
}

class クラス {
    use 部品;
    
    public function クラスのメソッド() {
        echo "クラスのメソッド<br>";
    }
}


$obj = new クラス();

$obj->トレイトのメソッド();
$obj->クラスのメソッド();