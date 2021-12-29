<?php
$diceA = 6;
$diceB = "6";
$diceC = (int)$diceB;
if ($diceA === $diceC) {
 echo "Win" . PHP_EOL;
} else {
 echo "Lose" . PHP_EOL;
}
/*
Terminal
$ php choice9.php
Win

 */