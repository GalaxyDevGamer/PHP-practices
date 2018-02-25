<?php
require_once("_config.php");
session_start();
$sql = "SELECT id, pw email FROM user;";
$res_all = mysqli_query($conn, $sql) or die("ERROR: エラーが発生しました");
$r = mysqli_fetch_assoc($res_all);
$id = $r['id'];
$pw = $r['pw'];
$email = $r['email'];
if(isset($_POST["login"])) {
	if($_POST["id"] == $id && $_POST["pw"] == $pw) {
		session_regenerate_id(TRUE);
		$_SESSION["ID"] = $_POST["id"];
		header("Location: team_index.php");
		exit;
	}
	else {
		$errorMessage = "ユーザー名又はパスワードが間違っています";
	}
}