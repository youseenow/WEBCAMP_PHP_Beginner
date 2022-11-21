<?php



abstract class 抽象クラス {
    abstract public function 抽象メソッド();
    
    public function 普通のメソッド() {
        echo "普通のメソッド<br>";
    }
}



class 子クラス extends 抽象クラス {
    public function 抽象メソッド() {
        echo "子クラスで設定した抽象メソッド<br>";
    }
}



$obj = new 子クラス;
$obj->普通のメソッド();
$obj->抽象メソッド();