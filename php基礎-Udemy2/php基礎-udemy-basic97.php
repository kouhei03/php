<?php
$file = "/var/log/daemon.log";
$array = file($file, FILE_IGNORE_NEW_LINES);
print_r($array) . PHP_EOL;

/*
Terminal
$ php fs3.php
Array
(
 [0] => Hello PHP
 [1] => Hello World
)
 */