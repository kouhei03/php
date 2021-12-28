
<?php
$names = ["Andy", "Betty", "Carol"];
$temp = $names[0];
$names[0] = $names[2];
$names[2] = $temp;
var_dump($names) . PHP_EOL; 

/**Terminal
$ php array7.php
array(3) {
 [0]=>
 string(5) "Carol"
 [1]=>
 string(5) "Betty"
 [2]=>
 string(4) "Andy"
}

 */