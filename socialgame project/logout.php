<?php
session_start();
if (isset($_SESSION["ID"])) {
	$errorMessage = "ログアウトしました";
}
else {
	$errorMessage = "セッションタイムアウト";
}
$_SESSION = array();
@session_destroy();
header("Location: index.php");
?>