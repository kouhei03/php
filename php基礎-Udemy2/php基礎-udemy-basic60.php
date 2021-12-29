<?php
$dice = 6;
if ($dice >= 4) {
 echo "Win" . PHP_EOL;
}
/*分岐構造

if⽂を使うと分岐構造を定義できる
if⽂の条件()が成⽴する場合、直後の処理ブロック{}が実⾏される
if⽂にはelseやelse ifを組み合わせることもできる

構⽂
if (条件) {
 // 処理
}
if⽂の構⽂はwhile⽂と同じです。if⽂は条件が成⽴したときに⼀度だけ処理を実⾏します。

Terminal
$ php choice1.php
Win

*/