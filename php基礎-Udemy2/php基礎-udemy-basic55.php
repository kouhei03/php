<?php
$names = ["Andy", "Betty", "Carol"];
$i = 0;
while ($i < 3) {
 echo "Hello ";
 echo $names[$i] . PHP_EOL;
 $i++;
}
/*反復条件の $i < 3 の部分は $i < count($names) と実装できます。
Terminal
$ php loop2.php
Hello Andy
Hello Betty
Hello Carol
 */