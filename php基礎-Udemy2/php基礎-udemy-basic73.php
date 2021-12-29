<?php
$student = ["name" => "Andy", "age" => 20];
$student["age"] = 21;
echo $student["age"] . PHP_EOL;

/*要素の変更
連想配列の要素を変更できる
変更時には既存のキーを指定して値を代⼊する
存在しないキーを指定すると追加扱いとなる

Terminal
$ php a_array3.php
21
 */
