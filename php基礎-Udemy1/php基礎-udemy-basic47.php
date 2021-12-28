
<?php
$i = 0;
while ($i <= 0) {
 echo $i . PHP_EOL;
 $i++;
}
/**反復条件
while⽂の反復条件()で繰り返しを制御する
反復条件によっては⼀度も実⾏されないこともある
反復条件は評価されると論理値（true, false）になる

loop1.php - 修正
<?php
$i = 0;
while ($i > 5) {
 echo $i . PHP_EOL;
 $i++;
}
Terminal
$ php loop1.php
反復処理が⼀度も実⾏されないので、上記のように何も出⼒されないようになります
*/