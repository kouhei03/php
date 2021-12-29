<?php
function calc($price) {
 $result = $price * 1.08;
 return $result;
}
$price1 = calc(100);
echo $price1 . PHP_EOL;
$price2 = calc(1000);
echo $price2 . PHP_EOL;
/*
ユーザ定義関数
⾃作する関数のことをユーザ定義関数と呼ぶ
関数を定義するにはfunctionキーワードを使う
関数を定義することで、再利⽤性、可読性、メンテナンス性を⾼めることできる
構⽂
function 関数名(引数, 引数) {
 // 処理
 return 戻り値;
}
引数や戻り値（return）は省略可能です。引数は,で区切って複数定義できます

Terminal
$ php function2.php
108
1080
*/