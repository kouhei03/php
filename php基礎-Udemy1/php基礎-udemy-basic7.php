<?php
/*
php.iniファイル
php.iniファイルはPHPの設定情報を管理する
/etc/php.iniなど規定のフォルダに配置する
php.iniファイルを編集することで、エラーの出⼒レベル、マルチバイト⽂字列の設定、タイムゾーンの設定
などPHPの様々な設定をカスタマイズできる
Macに標準でインストールされているPHPの場合、デフォルトではphp.iniファイルが作成されていませ
ん。以下のcpコマンドでphp.iniファイルをコピーして作成します。
sudo cp /etc/php.ini.default /etc/php.ini
/etcフォルダ以下を編集するには管理者権限が必要です。sudoコマンドは管理者権限で実⾏するコマンドで
す。
info.php
<?php
echo phpinfo();
Terminal
$ php -S localhost:8000
-Sオプションを指定するとPHPに付属しているビルトインWebサーバを起動できます。またキーボードから
ctrl - cとタイプすることでビルトインWebサーバを停⽌できます。ビルトインWebサーバの詳細につい
ては後述します。
php_basic.md 5/17/2020
9 / 129
Browser
http://localhost:8000/info.php

*/
