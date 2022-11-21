<?php



class 親クラス {
    
    public function 親メソッド() {
        echo "親クラス内親メソッド<br>";
    }
    
    public function メソッド() {
        echo "親クラス内メソッド<br>";
    }
    
}



class 子クラス extends 親クラス {
    
    public function 子メソッド() {
        echo "子クラス内子メソッド<br>";
    }
    
    public function メソッド() {
        echo "子クラス内メソッド<br>";
    }
    
}



$obj = new 子クラス();
$obj->親メソッド();
$obj->子メソッド();
$obj->メソッド();