
<?php
$names = ["Andy", "Betty", "Carol"];
echo $names[3] . PHP_EOL; 

/*要素番号の指定
配列を構成する⼀つひとつのデータを要素と呼ぶ
要素番号は0番から割り振られる
存在しない要素番号を指定するとエラー

Terminal
$ php array2.php
PHP Notice: Undefined offset: 3 in /Users/murayama/Desktop/codephp/array2.php on line 4
Notice: Undefined offset: 3 in /Users/murayama/Desktop/code-php/array2.php
on line 4
PHPのエラーメッセージにはError（エラー）、Warning（警告）、Notice（注意）など様々な種類がありま
す。ここではPHP Noticeと先頭に出⼒されています
 */