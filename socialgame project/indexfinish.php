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
print "�������܌��J���邽�߂̏������s���Ă��܂��B���J�J�n�܂ł��΂炭���҂����������B���܂ł̖K���(�Ǘ��҂̃e�X�g�K����܂�)[$count]�l";
?>