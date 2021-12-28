
<?php
$names = ["Andy", "Betty", "Carol"];
unset($names[1]);
var_dump($names) . PHP_EOL; 

/*
 * Terminal
$ php array9.php
array(2) {
 [0]=>
 string(4) "Andy"
 [2]=>
 string(5) "Carol"
}
unset関数による配列の要素の削除は、要素番号に空きが⽣じるため注意が必要です。配列の要素番号に空き
があると扱いにくいものになってしまいます
 */

 