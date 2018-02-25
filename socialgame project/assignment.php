<?php

// �e�[�u������v���O����

require_once( "_config.php" );

$title = "�e�[�u������v���O����";

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
	font-family:'Lucida Grande','Hiragino Kaku Gothic ProN', '�q���M�m�p�S ProN W3', Meiryo, ���C���I, sans-serif;
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
<a href="index.php">�߂�</a>
</div><!-- /header -->

<div data-role="content">
<table style="margin-top:2em;">
<caption>�e�[�u���\��</caption>
<tr><th>ID</th><th>����</th><th>���[��</th><th>�Z��</th></tr>

EOL;

if ( mysqli_num_rows( $res_all ) ) {
	while( $r = mysqli_fetch_assoc( $res_all ) ) {
		$id = $r['id'];
		$fullname = ( empty( $r['fullname'] ) ) ? "(�Ȃ�)" : $r['fullname'];
		$email = ( empty( $r['email'] ) ) ? "(�Ȃ�)" : $r['email'];
		$addr = ( empty( $r['addr'] ) ) ? "(�Ȃ�)" : $r['addr'];

		$HTML .= <<<EOL
<tr><td>$id</td><td>$fullname</td><td>$email</td><td>$addr</td></tr>

EOL;
	}
}
else
	$HTML .= "<tr><td colspan=\"4\">�o�^������܂���</td></tr>\n";

$HTML .= <<<EOL
</table>

<form action="receive.php" method="post">
<table style="margin-top:2em;">
<caption>����</caption>
<tr><td>����</td><td><input type="text" name="fullname" /></td></tr>
<tr><td>���[��</td><td><input type="text" name="email" /></td></tr>
<tr><td>�Z��</td><td><input type="text" name="addr" /></td></tr>
<tr><td>�s���{��</td><td><select name="state">
<option value="�s���{��">�I�����Ă�������</option>
<option value="�k�C��">�k�C��</option>
<option value="�X��">�X��</option>
<option value="��茧">��茧</option>
<option value="�{�錧">�{�錧</option>
<option value="�H�c��">�H�c��</option>
<option value="�R�`��">�R�`��</option>
<option value="��錧">��錧</option>
<option value="�Ȗ،�">�Ȗ،�</option>
<option value="�Q�n��">�Q�n��</option>
<option value="��ʌ�">��ʌ�</option>
<option value="��t��">��t��</option>
<option value="�����s">�����s</option> 
<option value="�_�ސ쌧">�_�ސ쌧</option>
<option value="�V����">�V����</option>
<option value="�x�R��">�x�R��</option>
<option value="�ΐ쌧">�ΐ쌧</option>
<option value="���䌧">���䌧</option>
<option value="�R����">�R����</option> 
<option value="���쌧">���쌧</option>
<option value="�򕌌�">�򕌌�</option>
<option value="�É���">�É���</option>
<option value="���m��">���m��</option>
<option value="�O�d��">�O�d��</option>
<option value="���ꌧ">���ꌧ</option>
<option value="���s�{">���s�{</option>
<option value="���{">���{</option>
<option value="���Ɍ�">���Ɍ�</option>
<option value="�ޗǌ�">�ޗǌ�</option>
<option value="�a�̎R��">�a�̎R��</option>
<option value="���挧">���挧</option> 
<option value="������">������</option>
<option value="���R��">���R��</option>
<option value="�L����">�L����</option>
<option value="�R����">�R����</option>
<option value="������">������</option>
<option value="���쌧">���쌧</option> 
<option value="���Q��">���Q��</option>
<option value="���m��">���m��</option>
<option value="������">������</option>
<option value="���ꌧ">���ꌧ</option>
<option value="���茧">���茧</option>
<option value="�F�{��">�F�{��</option>
<option value="�啪��">�啪��</option>
<option value="�{�茧">�{�茧</option>
<option value="��������">��������</option>
<option value="���ꌧ">���ꌧ</option> /></td></tr>
<tr><td colspan="2" style="text-align:right;"><input type="submit" class="button" value="�o�^" /></td></tr>
</table>
</form>
<div style="margin-top:1em;">
<form action="table_delete.php" method="post">
�폜������ID�@<input type="text" name="id" style="text-align:right;" size="2" />�@<input type="submit" class="button" value="�폜" />
</form>
<form action="reset.php" method="post">
�e�[�u�����Z�b�g�@<input type="submit" class="button" value="���s" />
</form>
</div>

</div><!-- /content -->
</div><!-- /page -->
</body>
</html>
EOL;

echo $HTML;
?>
