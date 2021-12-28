
<?php
$names = ["Andy", "Betty", "Carol"];
echo $names;

/*  配列の出⼒
配列変数はechoで出⼒できない
配列変数の出⼒にはvar_dump関数を使う
var_dump関数は変数の詳細な情報を出⼒する

Terminal
$ php array3.php
PHP Notice: Array to string conversion in /Users/murayama/Desktop/codephp/array3.php on line 4
Notice: Array to string conversion in /Users/murayama/Desktop/codephp/array3.php on line 4
Array to string conversionという出⼒から「配列を⽂字列に変換している」と読み取れます。

 */