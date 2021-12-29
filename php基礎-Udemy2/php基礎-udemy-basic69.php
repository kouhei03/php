<?php
$names = ["Andy", "Betty", "Carol"];
for ($i = 0; $i < 3; $i++) {
 if ($names[$i] != "Andy") {
 echo "Hello ";
 echo $names[$i] . PHP_EOL;
 }
}
/*if⽂の応⽤
反復構造と分岐構造を組み合わせることができる
配列の中の特定の要素だけを処理できる
制御構造を組み合わせるとインデントが深くなる

Terminal
$ php choice10.php
Hello Betty
Hello Carol
 */