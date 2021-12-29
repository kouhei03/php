<?php
$file = "heloo.txt";
$handle = fopen($file, "r");
if ($handle === false) {
 die("can't open file");
}
while(($line = fgets($handle)) !== false) {
 echo $line;
}
fclose($handle);

/*ファイルの読み込み（書き込み）に失敗する場合
ファイルシステム関数は、プログラムの実⾏環境の影響を受ける
他のプログラムがファイルを処理（ロック）している場合
ファイルへのアクセス権限がない場合
ファイル書き込み時にディスク容量が⾜りない場合 など
ファイルシステムを扱う関数のほとんどは、実⾏時にエラーが発⽣した場合、戻り値にfalseを返す
関数呼び出し時に、エラー制御演算⼦@を付けると警告メッセージを抑制できる

die関数を呼び出すとその場でメッセージを出⼒して異常終了します。
Terminal
$ php fs5.php
PHP Warning: fopen(heloo.txt): failed to open stream: No such file or
directory in /Users/murayama/Desktop/test.php on line 3
Warning: fopen(heloo.txt): failed to open stream: No such file or
directory in /Users/murayama/Desktop/test.php on line 3
can't open file

 */