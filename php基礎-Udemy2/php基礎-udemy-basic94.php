<?php
$str = "Hello World" . PHP_EOL;
$file = "hello.txt";
file_put_contents($file, $str, FILE_APPEND);

/*
Terminal
$ php fs1.php
hello.txt
Hello PHP
Hello World
hello.txtの内容にHello Worldが追記されていることがわかります。
 */