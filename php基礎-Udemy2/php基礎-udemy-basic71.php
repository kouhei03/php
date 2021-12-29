<?php
$student = ["name" => "Andy", "age" => 20];
$student["height"] = 180;
echo $student["height"]. PHP_EOL;

/*要素の追加
連想配列に要素を追加できる
追加時には新たなキーを指定して値を代⼊する
count関数でキーと値の組み合わせの数を取得できる

Terminal
$ php a_array2.php
180
 */