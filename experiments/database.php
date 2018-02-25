<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
<title>create_table.php</title>
</head>
<body>
<?php
print "done";
　// データベースサーバへの接続
　$db = mysql_connect('127.0.0.1','user00000000','password','db00000000');

　// データベースの選択
　$db_name = 'testdatabase';
　mysql_select_db($db_name,$db) or die("データベースがありません");

　// テーブルの一覧表示
　show_tables($db_name,$db);
　print "<br>\n";

　// テーブルが存在しない場合
　$tbl_name = "test";
　if(!table_exists($db_name,$tbl_name,$db))
　{

　　// テーブル作成用SQL文
　　$str_sql = "CREATE TABLE {$tbl_name}"
　　　　　　. "("
　　　　　　. "商品コード CHAR(4),"
　　　　　　. "商品名 CHAR(16),"
　　　　　　. "単価 INTEGER,"
　　　　　　. "PRIMARY KEY(商品コード)"
　　　　　　. ");";

　　// SQL文の実行
　　mysql_query($str_sql,$db);
　　print "テーブル「{$tbl_name}」を作成しました。<br><br>\n";

　　// テーブルの一覧表示
　　show_tables($db_name,$db);
　　print "<br>\n";

　　// フィールド属性の一覧表示
　　show_fields($db_name,$tbl_name,$db);
　　print "<br>\n";
　}

　// テーブルが存在する場合
　else
　{
　　print "テーブル「{$tbl_name}」は作成済みです。<br>\n";
　}

　// テーブルが存在する場合
　if(table_exists($db_name,$tbl_name,$db))
　{
　　// テーブル削除用SQL文
　　$str_sql = "DROP TABLE {$tbl_name};";

　　// SQL文の実行
　　mysql_query($str_sql,$db);
　　print "テーブル「{$tbl_name}」を削除しました。<br><br>\n";

　　// テーブルの一覧表示
　　show_tables($db_name,$db);
　　print "<br>\n";
　}

　// テーブルが存在しない場合
　else
　{
　　print "テーブル「{$tbl_name}」はありません。<br>\n";
　}

　// データベースサーバの切断
　mysql_close($db);

// ----------------------------------------------
// テーブルの存在チェック関数の定義
function table_exists($db_name,$tbl_name,$db)
{
　// テーブルリストの取得
　$rs = mysql_list_tables($db_name,$db);

　// 結果セットの1レコード分を添え字配列として取得する
　while($arr_row = mysql_fetch_row($rs))
　{
　　// 添え字配列内にテーブル名が存在する場合
　　if(in_array($tbl_name,$arr_row))
　　{
　　　return true;
　　}
　}
　return false;
}
</body>
</html>
?>