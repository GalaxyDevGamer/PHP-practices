<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
<title>create_table.php</title>
</head>
<body>
<?php
print "done";
�@// �f�[�^�x�[�X�T�[�o�ւ̐ڑ�
�@$db = mysql_connect('127.0.0.1','user00000000','password','db00000000');

�@// �f�[�^�x�[�X�̑I��
�@$db_name = 'testdatabase';
�@mysql_select_db($db_name,$db) or die("�f�[�^�x�[�X������܂���");

�@// �e�[�u���̈ꗗ�\��
�@show_tables($db_name,$db);
�@print "<br>\n";

�@// �e�[�u�������݂��Ȃ��ꍇ
�@$tbl_name = "test";
�@if(!table_exists($db_name,$tbl_name,$db))
�@{

�@�@// �e�[�u���쐬�pSQL��
�@�@$str_sql = "CREATE TABLE {$tbl_name}"
�@�@�@�@�@�@. "("
�@�@�@�@�@�@. "���i�R�[�h CHAR(4),"
�@�@�@�@�@�@. "���i�� CHAR(16),"
�@�@�@�@�@�@. "�P�� INTEGER,"
�@�@�@�@�@�@. "PRIMARY KEY(���i�R�[�h)"
�@�@�@�@�@�@. ");";

�@�@// SQL���̎��s
�@�@mysql_query($str_sql,$db);
�@�@print "�e�[�u���u{$tbl_name}�v���쐬���܂����B<br><br>\n";

�@�@// �e�[�u���̈ꗗ�\��
�@�@show_tables($db_name,$db);
�@�@print "<br>\n";

�@�@// �t�B�[���h�����̈ꗗ�\��
�@�@show_fields($db_name,$tbl_name,$db);
�@�@print "<br>\n";
�@}

�@// �e�[�u�������݂���ꍇ
�@else
�@{
�@�@print "�e�[�u���u{$tbl_name}�v�͍쐬�ς݂ł��B<br>\n";
�@}

�@// �e�[�u�������݂���ꍇ
�@if(table_exists($db_name,$tbl_name,$db))
�@{
�@�@// �e�[�u���폜�pSQL��
�@�@$str_sql = "DROP TABLE {$tbl_name};";

�@�@// SQL���̎��s
�@�@mysql_query($str_sql,$db);
�@�@print "�e�[�u���u{$tbl_name}�v���폜���܂����B<br><br>\n";

�@�@// �e�[�u���̈ꗗ�\��
�@�@show_tables($db_name,$db);
�@�@print "<br>\n";
�@}

�@// �e�[�u�������݂��Ȃ��ꍇ
�@else
�@{
�@�@print "�e�[�u���u{$tbl_name}�v�͂���܂���B<br>\n";
�@}

�@// �f�[�^�x�[�X�T�[�o�̐ؒf
�@mysql_close($db);

// ----------------------------------------------
// �e�[�u���̑��݃`�F�b�N�֐��̒�`
function table_exists($db_name,$tbl_name,$db)
{
�@// �e�[�u�����X�g�̎擾
�@$rs = mysql_list_tables($db_name,$db);

�@// ���ʃZ�b�g��1���R�[�h����Y�����z��Ƃ��Ď擾����
�@while($arr_row = mysql_fetch_row($rs))
�@{
�@�@// �Y�����z����Ƀe�[�u���������݂���ꍇ
�@�@if(in_array($tbl_name,$arr_row))
�@�@{
�@�@�@return true;
�@�@}
�@}
�@return false;
}
</body>
</html>
?>