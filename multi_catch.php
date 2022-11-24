<?php

class MyException extends Exception {}



try {
    throw new MyException("自力で投げた例外");
    throw new TypeError("自力で投げたtype error");
    throw new Exception("自力で投げたexception");
} catch(MyException $e) {
    echo "MyExceptionをキャッチしました<br>";
    var_dump($e->getMessage());
} catch(Error $e) {
    echo "Errorをキャッチしました<br>";
    var_dump($e->getMessage());
} catch(Throwable $e) {
    echo "Throwableをキャッチしました<br>";
    var_dump($e->getMessage());
}
echo "fin";