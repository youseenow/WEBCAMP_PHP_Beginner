<?php



//try {
//    $obj = new SplFileObject('dummy');
//    echo "例外が起きたあとの処理。ここは通る？<br>";
//} catch(\Throwable $e) {
//    echo "例外が発生したらここを通る<br>";
//    var_dump($e->getMessage());
//}
//echo "fin";
//
//
//echo "<br><br>";


try {
    throw new Exception("自力で投げた例外");
    $obj = new SplFileObject('dummy');
    echo "例外が起きたあとの処理2。ここは通る2？<br>";
} catch(Throwable $e) {
    echo "例外が発生したらここを通る2<br>";
    var_dump($e->getMessage());
}
echo "fin";
