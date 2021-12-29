<?php
$file = "/var/log/daemon.log";
$str = file_get_contents($file);
echo $str . PHP_EOL;

/*file_get_contents — ファイルの内容を全て⽂字列に読み込む
引数
読み込み対象となるファイル名
戻り値
⽂字列（ファイルの内容）
ただし、読み込みに失敗した場合はfalse

hello.txt
Hello PHP
Hello World
Terminal
$ php fs2.php
Hello PHP
Hello World
*/