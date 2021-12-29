<?php
$dice = 4;
if (!($dice > 3)) {
 echo "Win" . PHP_EOL;
} else {
 echo "Lose" . PHP_EOL;
}
/*
この場合if ($dice <= 3)と記述するのと同じ結果になります。
Terminal
$ php choice6.php
Lose
 */