<?php
$names = ["Andy", "Betty", "Carol"];
$i = 0; // 初期化処理
while ($i < 3) { // 反復条件
 echo "Hello ";
 echo $names[$i] . PHP_EOL;
 $i++; // 増分処理
}

/*for⽂
for⽂は反復構造（繰り返し）を定義する
初期化処理、反復条件、増分処理をまとめて記述する
反復構造の全体像を把握しやすい
構⽂
for (初期化処理; 反復条件; 増分処理) {
 // 処理
}
 */