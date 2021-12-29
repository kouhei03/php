<?php
$file = "hello.txt";
$handle = fopen($file, "r");
while(($line = fgets($handle)) !== false) {
 echo $line;
}
fclose($handle);

/**Terminal
$ php fs5.php
Hello PHP
Hello World
 */