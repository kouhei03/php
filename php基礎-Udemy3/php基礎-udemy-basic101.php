<?php
$names = ["Andy", "Betty"];
$file = "names.txt";
$handle = fopen($file, "w");
for ($i = 0; $i < count($names); $i++) {
 fwrite($handle, $names[$i] . PHP_EOL);
}
fclose($handle);
/*Terminal
$ php fs6.php
ターミナルには何も表⽰されません。カレントディレクトリ上にnames.txtというファイルが⽣成されま
す。
names.txt
Andy
Betty */