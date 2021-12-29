<?php
$array = ["Andy", "Betty", "Carol"];
$sliced_array = array_slice($array, 1, 1);
print_r($sliced_array);

/*
Terminal
$ php arr4.php
Array
(
 [0] => Betty
)
*/