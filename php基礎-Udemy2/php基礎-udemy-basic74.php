<?php
$student = ["name" => "Andy", "age" => 20];
unset($student["age"]);
var_dump($student) . PHP_EOL;

/*要素の削除
連想配列の要素を削除できる
配列の要素を削除するには関数を使う
連想配列の要素（キーと値）の削除にはunset関数を使う

Terminal
$ php a_array4.php
array(1) {
 ["name"]=>
 string(4) "Andy"
}
 */