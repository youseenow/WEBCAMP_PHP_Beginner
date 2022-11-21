<?php


class Hoge {
    private static $静的なプロパティ;
    public static function 静的なメソッド() {
        echo "静的なメソッド";
    }
    
    public static function set静的メソッド($v) {
        static::$静的なプロパティ = $v;
    }
    
    public static function get静的メソッド() {
        return static::$静的なプロパティ;
    }
}

Hoge::静的なメソッド();

Hoge::set静的メソッド('set string');
echo Hoge::get静的メソッド();