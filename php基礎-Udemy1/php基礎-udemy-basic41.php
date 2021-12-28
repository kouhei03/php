
<?php
$names = ["Andy", "Betty", "Carol"];
$names[0] = $names[2];
$names[2] = $names[0] . PHP_EOL; 
var_dump($names) . PHP_EOL; 

/**要素の変更
要素の⼊れ替え
2つの要素を⼊れ替えることができる
ただし要素の⼊れ替えには⼯夫が必要
⼀時的にデータを代⼊する変数を⽤意する

Terminal
$ php array7.php
array(3) {
 [0]=>
 string(5) "Carol"
 [1]=>
 string(5) "Betty"
 [2]=>
 string(5) "Carol"
}
*/