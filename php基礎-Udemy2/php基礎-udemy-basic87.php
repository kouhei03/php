<?php
$array = ["Andy", "Betty", "Carol"];
$reversed_array = array_reverse($array);
print_r($reversed_array);

/*array_reverse — 要素を逆順にした配列を返す
引数
逆順の対象となる配列
戻り値
要素を逆順にした配列


Terminal
$ php arr2.php
Array
(
 [0] => Carol
 [1] => Betty
 [2] => Andy
)
*/