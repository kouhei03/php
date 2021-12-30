<?php
define("STATUS_OPENED", "0");
define("STATUS_CLOSED", "1");
define("TODO_LIST_CSV", "todo_list.csv");
function read_todo_list($include_closed = true)
{
 $handle = fopen(TODO_LIST_CSV, "r");
 $todo_list = [];
 while ($todo = fgetcsv($handle)) {
 if (!$include_closed
 && $todo[3] === STATUS_CLOSED) {
 continue;
 }
 $todo_list[] = $todo;
 }
 fclose($handle);
 return $todo_list;
}
# その他の定数、及び関数は省略...
/*
define関数を使って定数を定義する
fgetcsv関数はCSV形式のレコードを読み込み、戻り値を配列で返す
引数の$include_closedにfalseが指定された場合、ステータスが0：未完了のものだけを$todo_list
に追加する */