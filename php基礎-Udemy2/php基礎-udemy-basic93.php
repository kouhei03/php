<?php
$str = "Hello PHP" . PHP_EOL;
$file = "hello2.txt";
file_put_contents($file, $str);

/*
上書きモードと追記モード
file_put_contents関数はデフォルトで上書きモードで動作する
第3引数にFILE_APPEND定数を指定すると追記モードで動作する

Terminal
$ php fs1.php
hello.txt
Hello PHP
hello.txtの内容は上書きされてHello PHPに置き換わっていることがわかります。
*/