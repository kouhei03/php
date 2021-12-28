<?php
$x = 5;
$y = 2;
$z = $x + $y;
echo $z.PHP_EOL; # => 7
echo ",";
$z = $x - $y;
echo $z.PHP_EOL; # => 3
echo ",";
$z = $x * $y;
echo $z.PHP_EOL; # => 10
echo ",";
$z = $x / $y;
echo $z.PHP_EOL; # => 2.5
echo ",";
$z = $x % $y;
echo $z.PHP_EOL; # => 1
echo ",";
$z = $x ** $y;
echo $z.PHP_EOL; # => 25

/*Terminal
$ php var14.php
7,3,10,2.5,1,25
% 剰余演算⼦は変数の値が2の倍数や3の倍数などとチェックしたい場合に利⽤します。2の倍数かチェックす
るには、求めた剰余（余り）が0かどうかで判定できます。

 */

