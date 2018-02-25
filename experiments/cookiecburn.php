<?php

//
// cookieclicker	2013/09/24	ver 0.1
//
// 【概要】
// cookieclickerの簡易版
//

$title = "Cookie Clicker 簡易版";

$cookie = 0;
$num = ( empty( $_SESSION['num'] ) ) ? 0 : intval( $_SESSION['num'] );

$cookie=cookie+1;
if ( !empty( $_GET['add1'] ) ) {
	$num += intval( $_GET['add1'] );
	$_SESSION['num'] = $num;
}

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
input {font-family:arial;}
input.button {background-color:#FFFFFF;color:#CC9900;font-weight:bold;font-size:100%;}
a {text-decoration:none;}
a.file {color:#0000FF;font-weight:bold;}
a:visited {color:#0000CC;}
a:link {text-decoration:none;font-size:100%;}
a:hover {background-color:#F0F0FF;text-decoration:underline;color:#0000FF;}
#cookie {
	margin-left:1em;
	margin-top:2em;
	font-size:240%;
}
#add {
	margin-left:8em;
	margin-top:1em;
	font-size:120%;
}
//-->
</style>
</head>
<body OnLoad="AutoScript();">
<div data-role="page">
<div data-role="header">
<h1>$title</h1>
<form action="{$_SERVER['PHP_SELF']}">
<div id="cookie">現在のクッキー：{$num}枚{$cookie}　
<input type="submit" class="button" value="焼く" />
<input type="hidden" name="add1" value="1" />
</div>
</form>
</body>
</html>
EOL;

echo $HTML;
?>
