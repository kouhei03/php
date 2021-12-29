<?php
$file = "hello.txt";
$handle = fopen($file, "r");
$line = fgets($handle);
echo $line;
fclose($handle);

/*

hello.txt
Hello PHP

Terminal
$ php fs5.php
Hello PHP
*/