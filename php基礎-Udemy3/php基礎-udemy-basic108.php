<?php
function greet($name) {
 return "Hello $name" . PHP_EOL;
}
$message = greet("Andy");
echo $message;

/*戻り値の定義
戻り値はreturnキーワードで指定する
returnキーワードを使わない場合、戻り値のない関数となる
returnキーワードに到達すると関数は終了する

Terminal
$ php function5.php
Hello Andy
 */