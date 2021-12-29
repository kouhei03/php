<?php
function sum($x, $y, $z) {
 return $x + $y + $z;
}
$result = sum(100, 200, 300);
echo $result . PHP_EOL;
/**引数の定義
 引数は複数定義できる
引数を取らない関数も定義できる
関数呼び出し時に引数を正しく指定する必要がある

Terminal
$ php function3.php
600
 */