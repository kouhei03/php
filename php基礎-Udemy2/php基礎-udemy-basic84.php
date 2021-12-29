<?php
$array = ["Andy", "Betty", "Carol"];
$str = implode(",", $array);
echo $str . PHP_EOL;

/*implode — 配列要素を⽂字列により連結する
引数
. 区切り⽂字
. 変換対象となる配列
戻り値
区切り⽂字で連結された⽂字列

Terminal
$ php string5.php
Andy,Betty,Carol

 */