<?php
/*
phpコマンド
$ php basic1.php
PHPプログラムを実⾏するためのコマンド
php FILENAMEのように実⾏するファイルを指定する
phpコマンドにオプションを指定することもできる
phpコマンドのオプション
オプション 機能
-v PHPのバージョンを表⽰する
-a 対話形式でPHPを実⾏する
-i PHPの設定情報を表⽰する
ここでは指定可能なオプションの⼀部を記載しています。
Terminal - -vオプション
$ php -v
PHP 7.1.23 (cli) (built: Nov 7 2018 18:20:35) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
-vオプションを指定するとPHPのバージョンを確認できます。
Terminal - -aオプション
$ php -a
Interactive shell
php > echo "Hello";
Hello
-aオプションを指定すると対話形式でPHPを実⾏できます。quitと⼊⼒すると終了できます

$ php -i
phpinfo()
PHP Version => 7.2.22
System => Darwin murayamamasahikonoMacBook-Pro.local 18.2.0 Darwin Kernel
Version 18.2.0: Thu Dec 20 20:46:53 PST 2018; root:xnu4903.241.1~1/RELEASE_X86_64 x86_64
Build Date => Sep 8 2019 15:17:40
...省略
-iオプションを指定するとPHPの設定情報を確認できます。同様の情報は後述するphpinfo()関数で取得す
ることもできます
*/