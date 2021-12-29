<?php
$dice = 4;
if ($dice >= 5) {
 echo "Win";
} else if ($dice >= 3) {
 echo "Draw". PHP_EOL;
} else {
 echo "Lose"
}

/*if - else if
if⽂にはelse ifを組み合わせることができる
if⽂の条件()が成⽴しない場合、else ifの条件()が評価される
else ifは複数記述できる
構⽂
if (条件1) {
 // 処理1
} else if (条件2) {
 // 処理2
} else {
 // 処理3
}

Terminal
$ php choice3.php
Draw
PHPのelse ifはelseifのように半⾓スペースを付けて記述することもできます。
 */