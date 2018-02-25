<?php
require_once( "_config.php" );
$list=mysql_list_table($DBNAME,$conn);
while($kk=mysql_fetch_array($list)){
	print $kk[0];
	print "<br>";
}
print $DBNAME;
?>