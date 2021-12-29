<?php
$diceA = 4;
$diceB = 3;
if ($diceA >= 4 && $diceB >= 4) {
 echo "Win". PHP_EOL;
} else {
 echo "Lose". PHP_EOL;
}
/*
論理演算⼦
論理演算⼦によって複数の条件を組み合わせることができる
&&は論理積（かつ、AND）、||は論理和（あるいは、OR）を意味する
!は否定を意味し、評価結果が反転する
Terminal
$ php choice4.php
Lose */