<?php
$message = "ハローワールド";
$length = mb_strlen($message);
echo $length . PHP_EOL;

/*
マルチバイト⽂字列関数
⽇本語のようなマルチバイト⽂字列を扱う場合はマルチバイト⽤の⽂字列関数を使う
PHPの実⾏環境においてmbstringモジュールが有効になっている必要がある
mb_strlen関数やmb_substr関数などが存在する

Terminal
$ php string6.php
7
 */