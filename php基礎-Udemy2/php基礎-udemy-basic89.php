
<?php
$array = ["Andy", "Betty", "Carol"];
$sliced_array = array_slice($array, 1);
print_r($sliced_array);

/*array_slice — 配列の⼀部を展開する
引数
. ⼀部分の取得対象となる配列
. 開始位置
. 開始位置からの要素数 （省略可能）
戻り値
切り取った配列

Terminal
$ php arr4.php
Array
(
 [0] => Betty
 [1] => Carol
)
配列の要素番号は0からカウントします。

 */