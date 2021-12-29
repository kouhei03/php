<?php
$str = "Andy,Betty,Carol";
$array = explode(",", $str);
print_r($array);

/*explode — ⽂字列を⽂字列により分割する
引数
. 区切り⽂字
. 変換対象となる⽂字列
戻り値
区切り⽂字で分割された配列

$arrayには配列が代⼊されます。配列はechoで出⼒できないため、print_r関数で出⼒しています。
Terminal
$ php string4.php
Array
(
 [0] => Andy
 [1] => Betty
 [2] => Carol
)

 */