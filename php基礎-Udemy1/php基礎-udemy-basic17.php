

<?php
$name = "Andy";
$message1 = 'Hello $name'; # 変数を展開しない
echo $message1.PHP_EOL; # => Hello $name
$message2 = "Hello $name"; # 変数を展開する
echo $message2.PHP_EOL; # => Hello Andy

/*Terminal
$ php var11.php
Hello $nameHello Andy
 */