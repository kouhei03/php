
<?php
$price = 1000;
$tax = 1.10;
echo $price * $tax.PHP_EOL; # => 1100
/*
浮動⼩数点数型
実数（⼩数点を含むデータ）を扱うデータ型（""は不要）
float型、double型と呼ぶ
丸め誤差を含む（通常はIEEE754倍精度フォーマットに従う）

Terminal
$ php var9.php
1100
*/