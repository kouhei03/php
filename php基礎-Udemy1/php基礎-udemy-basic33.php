<?php
$names = ["Andy", "Betty", "Carol"];
echo "Hello " . PHP_EOL; 
echo $names[0];
echo "Hello " . PHP_EOL; 
echo $names[1];
echo "Hello " . PHP_EOL; 
echo $names[2];

/*配列
配列はプログラム上で複数のデータを管理する仕組み
配列は変数の⼀種であり、配列変数とも呼ぶ
[]の中にデータを定義する

構⽂
$変数名 = [データ, データ, データ];

配列変数の[]に指定する数値のことを要素番号や添字、インデックス、キーなどと呼びます。
Terminal
$ php array1.php
Hello AndyHello BettyHello Carol

ここで学習する配列は、後で学習する連想配列と区別して添字配列と呼ぶこともあります
 */