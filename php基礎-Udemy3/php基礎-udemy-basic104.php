<?php
$file = "heloo.txt";
$handle = @fopen($file, "r");
if ($handle === false) {
 die("can't open file");
}
while(($line = fgets($handle)) !== false) {
 echo $line;
}
fclose($handle);
/*can't open fileメッセージだけでなく、Warningメッセージも出⼒されています。Warningメッセージ
を⾮表⽰にするには、エラー制御演算⼦@を使います。

Terminal
$ php $fs5.php
can't open file
*/