
<?php
$names = ["Andy", "Betty", "Carol"];
$names[1] = "";
var_dump($names) . PHP_EOL; 

/**要素の削除
配列の要素を削除するには関数を使う
unset関数を使うと要素番号に空きが⽣じるので注意
array_splice関数を使うと配列の要素を削除できる 

Terminal
$ php array8.php
array(3) {
 [0]=>
 string(4) "Andy"
 [1]=>
 string(0) ""
 [2]=>
 string(5) "Carol"
}

*/