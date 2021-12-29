<?php
for ($i = 0; $i < 10; $i++) {
 if ($i == 5) {
 break;
 }
 echo $i . PHP_EOL;
}
echo "end" . PHP_EOL;

/*breakとcontinue
break、continueを使うと反復処理を制御できる
breakを使うと反復処理を終了する
continueを使うと次の反復処理（ループ）に進む
Terminal
$ php loop5.php
0
1
2
3
4
end

*/