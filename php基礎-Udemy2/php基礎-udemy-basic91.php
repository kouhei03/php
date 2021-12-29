<?php
$array = ["Betty", "Carol", "Andy"];
sort($array);
print_r($array);

/*sort — 配列をソートする
引数
ソートの対象となる配列
戻り値
並び替えに成功した場合 true 失敗した場合 false

Terminal
$ php arr5.php
Array
(
 [0] => Andy
 [1] => Betty
 [2] => Carol
)
 */