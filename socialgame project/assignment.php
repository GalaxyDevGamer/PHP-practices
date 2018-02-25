<?php

// テーブル操作プログラム

require_once( "_config.php" );

$title = "テーブル操作プログラム";

$sql = "SELECT id, fullname, email, addr FROM member;";
$res_all = mysqli_query( $conn, $sql ) or die( "Error: $sql" );

$HTML = <<<EOL
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-cache" />
<title>$title</title>
<style type="text/css">
<!--
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,p,blockquote {margin:0;padding:0;}
body {
	font-family:'Lucida Grande','Hiragino Kaku Gothic ProN', 'ヒラギノ角ゴ ProN W3', Meiryo, メイリオ, sans-serif;
	color: #666666;
	margin: 0px;
	padding: 0px;
	background-repeat: repeat;
}
h1 {background-color:#365EBF;color:#FFFFFF;font-size:120%;padding:0.5em;}
h2 {color:#3b5998;font-size:100%;padding:4px;margin:0em 0em 1em 0em;}
table {border-collapse:collapse;border-spacing:0;border:solid 1px #999999;}
th {background-color:#CCCCCC;border:solid 1px #999999;font-size:90%;}
td {font-size:80%;border:solid 1px #E8E8E8;margin:1px;padding:1px;font-family:arial;}
td.upload,caption {text-align:left;color:#666666;background-color:#F8F8F8;font-size:90%;font-weight:bold;font-family:"MS UI Gothic";}
td.file {width:100px;}
input {font-family:arial;}
input.button {background-color:#FFFFFF;color:#000099;font-weight:bold;}
input.dl {background-color:#FFFFFF;font-size:90%;color:#990000;font-weight:bold;}
input.del {background-color:#FFFFFF;font-size:90%;color:#999999;font-weight:bold;}
a {text-decoration:none;}
a.file {color:#0000FF;font-weight:bold;}
a:visited {color:#0000CC;}
a:link {text-decoration:none;font-size:100%;}
a:hover {background-color:#F0F0FF;text-decoration:underline;color:#0000FF;}
//-->
</style>
</head>
<body>
<div data-role="page">
<div data-role="header">
<h1>$title</h1>
<a href="index.php">戻る</a>
</div><!-- /header -->

<div data-role="content">
<table style="margin-top:2em;">
<caption>テーブル表示</caption>
<tr><th>ID</th><th>氏名</th><th>メール</th><th>住所</th></tr>

EOL;

if ( mysqli_num_rows( $res_all ) ) {
	while( $r = mysqli_fetch_assoc( $res_all ) ) {
		$id = $r['id'];
		$fullname = ( empty( $r['fullname'] ) ) ? "(なし)" : $r['fullname'];
		$email = ( empty( $r['email'] ) ) ? "(なし)" : $r['email'];
		$addr = ( empty( $r['addr'] ) ) ? "(なし)" : $r['addr'];

		$HTML .= <<<EOL
<tr><td>$id</td><td>$fullname</td><td>$email</td><td>$addr</td></tr>

EOL;
	}
}
else
	$HTML .= "<tr><td colspan=\"4\">登録がありません</td></tr>\n";

$HTML .= <<<EOL
</table>

<form action="receive.php" method="post">
<table style="margin-top:2em;">
<caption>入力</caption>
<tr><td>氏名</td><td><input type="text" name="fullname" /></td></tr>
<tr><td>メール</td><td><input type="text" name="email" /></td></tr>
<tr><td>住所</td><td><input type="text" name="addr" /></td></tr>
<tr><td>都道府県</td><td><select name="state">
<option value="都道府県">選択してください</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option> 
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option> 
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option> 
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option> 
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option> /></td></tr>
<tr><td colspan="2" style="text-align:right;"><input type="submit" class="button" value="登録" /></td></tr>
</table>
</form>
<div style="margin-top:1em;">
<form action="table_delete.php" method="post">
削除したいID　<input type="text" name="id" style="text-align:right;" size="2" />　<input type="submit" class="button" value="削除" />
</form>
<form action="reset.php" method="post">
テーブルリセット　<input type="submit" class="button" value="実行" />
</form>
</div>

</div><!-- /content -->
</div><!-- /page -->
</body>
</html>
EOL;

echo $HTML;
?>
