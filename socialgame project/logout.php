<?php
session_start();
if (isset($_SESSION["ID"])) {
	$errorMessage = "���O�A�E�g���܂���";
}
else {
	$errorMessage = "�Z�b�V�����^�C���A�E�g";
}
$_SESSION = array();
@session_destroy();
header("Location: index.php");
?>