<?php

if ( !empty( $_SESSION['head'] ) ) {

	$HTML .= <<<EOL
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
	font-family:'Lucida Grande','Hiragino Kaku Gothic ProN', 'ƒqƒ‰ƒMƒmŠpƒS ProN W3', Meiryo, ƒƒCƒŠƒI, sans-serif;
	color: #666666;
	margin: 0px;
	padding: 0px;
	background-repeat: repeat;
}
h1 {background-color:#365EBF;color:#FFFFFF;font-size:120%;padding:0.5em;}
h2 {color:#3b5998;font-size:100%;padding:4px;margin:0em 0em 1em 0em;}
table {border-collapse:collapse;border-spacing:0;border:solid 1px #999999;}
th {background-color:#CCCCCC;border:solid 1px #999999;font-size:90%;}
td {font-size:80%;border:solid 1px #E8E8E8;margin:1px;padding:1px;font-family:arial;font-weight:bold;}
td.upload,caption {text-align:left;color:#666666;background-color:#F8F8F8;font-size:90%;font-weight:bold;font-family:"MS UI Gothic";}
td.file {width:100px;}
input {font-family:arial;}
input.button {padding:0.1em;background-color:#E8E8FF;color:#000099;font-weight:bold;font-size:100%;}
.main input.button {padding:0.5em;background-color:#FFE8E8;color:#990000;font-weight:bold;font-size:120%;}
.main {text-align:center;}
.main table {margin-left:auto;margin-right:auto;margin-bottom:2em;}
.main td {color:#333399;font-weight:bold;padding:0.2em;font-size:90%;}
.msg {margin-top:1em;color:#FF0000;font-size:140%;}
a {text-decoration:none;}
a.file {color:#0000FF;font-weight:bold;}
a:visited {color:#0000CC;}
a:link {text-decoration:none;font-size:100%;}
a:hover {background-color:#F0F0FF;text-decoration:underline;color:#0000FF;}
//-->
</style>
</head>
<body>
<h1>Galaxy Developer Team</h1>
<div id="page">
<div id="header">
<a href="index.php">–ß‚é</a>
</div><!-- /header -->
<div id="content">

EOL;

unset( $_SESSION['head'] );
}

else
	header( "Location: index.php" );
