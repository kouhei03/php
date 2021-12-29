<?php
$file = "/var/log/daemon.log";
$array = file($file);
print_r($array) . PHP_EOL;

/*file — ファイル全体を読み込んで配列に格納する
引数
. 読み込み対象となるファイル名
. フラグ
FILE_IGNORE_NEW_LINES定数指定すると改⾏コードを除去する
戻り値
配列（ファイルの内容を⾏ごとに要素に変換したもの）
ただし、読み込みに失敗した場合はfalse
 */