
<?php
$name = "Andy";
$name2 = "Betty";
$all_names = $name . $name2;
echo $all_names.PHP_EOL; # => AndyBetty

/*
  PHPの変数名は先頭⽂字を$記号で始める
 変数名には半⾓英数字や_アンダースコアを使う
 ただし$記号の直後に数字を使うことはできない

  . 記号は2つの⽂字列データを連結するために使います。
 */
/*
Terminal
$ php var2.php
AndyBetty


var3.php - 不正な変数名
<?php
name = "Andy"; # $記号で始まっていない
$2name = "Betty"; # $記号の直後に数字は使えない
$all-names = $name . $name2; # 変数名に-（ハイフン）は使えない
 */