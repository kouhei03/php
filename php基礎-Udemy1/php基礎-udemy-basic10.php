<?php
$name = "Andy";
$Name = "Betty";
$NAME = "Carol";
echo $name.PHP_EOL; # => Andy
echo $Name.PHP_EOL; # => Betty
echo $NAME.PHP_EOL; # => Carol

/*変数の命名規則 - ⼤⽂字⼩⽂字の取り扱い
変数名はアルファベットの⼤⽂字⼩⽂字を区別する
変数名には⼩⽂字を使うことが⼀般的
変数名に2つ以上の単語を組み合わせる場合はキャメルケース、スネークケースといった表記法がある
上記の3つの変数の中では$nameが⼀般的な名前の付け⽅です。
 */
/* Terminal

$ php var4.php
AndyBettyCarol
*/