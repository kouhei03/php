<?php
$diceA = 6;
$diceB = "6";
if ($diceA == $diceB) {
 echo "Win" . PHP_EOL;
} else {
 echo "Lose" . PHP_EOL;
}
/*
異なるデータ型の⽐較
==演算⼦は型の相互変換が発⽣する
===演算⼦は型の相互変換が発⽣しない
(int)のように記述することでデータ型を変換できる（キャスト）

Terminal
$ php choice7.php
Win
*/