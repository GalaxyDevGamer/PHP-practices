<?php
require_once("_config.php");
session_start();
if(empty($_POST["currentpw"]) or empty($_POST["newpw"])) {
	$_SESSION['msg'] = "未入力の項目があります";
	header("Location: cd_pw.php");
} else {
$curpw = $_POST["currentpw"];
$id = $_SESSION["ID"];
$sql = "SELECT pw FROM user WHERE id='$id';";
$exe = mysqli_query($conn, $sql) or die("Error: Unknown Error1");
while ($r = mysqli_fetch_array($exe)) {
$pw = $r['pw'];
}
}
if($curpw == $pw) {
	$newpw = $_POST["newpw"];
	$update = "UPDATE user SET pw = '$newpw' WHERE id='$id';";
	mysqli_query($conn, $update) or die("Error: Unknown Error");
	header("Location: index.php");
	$_SESSION['msg'] == "";
} else {
	$_SESSION['msg'] = "パスワードが違います";
	header("Location: cd_pw.php");
}
?>