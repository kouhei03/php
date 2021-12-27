
<?php
$name = "Andy";
$student = true;
echo $name; # => Andy
echo ",";
var_dump($student).PHP_EOL; # => bool(true)

/*論理型
真を表すtrueと偽を表すfalseの2つのデータで構成されるデータ型
boolean型、bool型と呼ぶ
論理型データの確認にはvar_dump関数を使う */

/*
論理型データはecho命令で出⼒するとtrueの場合は1、falseの場合は""空⽂字に置き換わってしまいま
す。ここではvar_dump関数を使ってデータを確認しています。
Terminal
$ php var12.php
Andy,bool(true)
論理型のデータ（true、false）は後で学習するif⽂やfor⽂などと相性の良いものになっています */