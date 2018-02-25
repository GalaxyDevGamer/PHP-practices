<?php
$fn = 'access_counter.txt';
$fp = fopen($fn, "r+");
flock($fp,LOCK_EX);
$count = fgets($fp,32);
$count++;
fseek($fp,0);
fputs($fp,$count);
flock($fp,LOCK_UN);
fclose($fp);
print "ただいま公開するための準備を行っています。公開開始までしばらくお待ちください。今までの訪問者(管理者のテスト訪問も含む)[$count]人";
?>