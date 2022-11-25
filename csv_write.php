<?php

$write_data = [
    [111,222,333],
    ["aaa","bbb","ccc"],
    [",aa","b\"b","cc<br>"],
];

$file_name = __DIR__."/data.csv";

$file_obj = new SplFileObject($file_name, "w");

foreach($write_data as $datum) {
    $file_obj->fputcsv($datum);
}