<?php
print a;
require_once( "_config.php" );
$TBNAME = 'user';
if(!table_exists($DBNAME,$TBNAME,$conn)){
$sql = <<<EOL
CREATE TABLE user (
	id		INTEGER PRIMARY KEY AUTO_INCREMENT,
	pw		VARCHAR(32),
);
EOL;
mysql_query($sql,$conn);
print �e�[�u�����쐬���܂���;
}else{
	print �e�[�u���͏�ɑ��݂��܂�;
}
?>