<?php
$students = [
 ["name" => "Andy", "age" => 20],
 ["name" => "Betty", "age" => 19],
 ["name" => "Carol", "age" => 21]
];
for ($i = 0; $i < 3; $i++) {
 if ($students[$i]["age"] >= 20) {
 echo "Hello ";
 echo $students[$i]["name"] . PHP_EOL;
 }
}
/*
連想配列の応⽤
添字配列と連想配列を組み合わせることができる
添字配列と連想配列を組み合わせると表形式のデータを表現できる
要素番号とキーの組み合わせで必要なデータにアクセスする

Terminal
$ php a_array5.php
Hello Andy
Hello Carol
*/