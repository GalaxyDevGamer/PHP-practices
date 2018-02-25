<?php 
header('Content-Type: application/octet-stream'); 
header('Content-Disposition: attachment; filename="test.txt"'); 
header('Content-Length: '.filesize('test.txt'));
readfile("test.txt"); 
header('Location: data.php');
?>