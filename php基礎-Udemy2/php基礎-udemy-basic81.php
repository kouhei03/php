<?php
$str = "Hello World";
$sub = substr($str, 6);
echo $sub . PHP_EOL;
/*substr — ⽂字列の⼀部分を返す
引数
. 部分⽂字列の取得対象となる⽂字列
. 開始位置
. 開始位置からの⽂字数（省略可能）
戻り値
⽂字列の⼀部分

Terminal
$ php string3.php
World
 */