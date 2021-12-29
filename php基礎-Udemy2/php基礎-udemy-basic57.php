<?php
$names = ["Andy", "Betty", "Carol"];
for ($i = 0; $i < 3; $i++) {
 echo "Hello ";
 echo $names[$i] . PHP_EOL;
}

/*反復条件の $i < 3 の部分は $i < count($names) と実装できます。
Terminal
$ php loop3.php
Hello Andy
Hello Betty
Hello Carol

*/