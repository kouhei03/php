
<?php
$names = ["Andy", "Betty", "Carol"];
$names[1] = "Dave";
echo $names[0] . PHP_EOL; 
echo $names[1] . PHP_EOL; 
echo $names[2] . PHP_EOL; 

/**要素の変更
既存の要素に新たなデータを代⼊できる
変更時は、配列変数に要素番号を指定して代⼊する
存在しない要素番号を指定すると、指定した要素番号で追加される
構⽂
$配列変数[要素番号] = データ;

Terminal
$ php array6.php
AndyDaveCarol

 */