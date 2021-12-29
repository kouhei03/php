<?php
for ($i = 0; $i < 3; $i++) {
 for ($j = 0; $j < 3; $j++) {
 echo $i + $j;
 echo " ";
 }
 echo PHP_EOL;
}
/*ネストしたループ
反復構造の中で反復構造を定義できる
このような⼊れ⼦構造をネストと呼ぶ
カウンター変数には$i、$j、$kと名前をつけることが⼀般的

Terminal
$ php loop4.php
0 1 2
1 2 3
2 3 4
 */