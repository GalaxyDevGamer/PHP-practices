<?php
print "a";
require_once("mconfig.php");
include_once 'Crypt/Blowfish.php';
$key = 'BlowfishSecret';
$blowfish = new Crypt_Blowfish($key);
session_start();
if(empty($_POST["id"]) or empty($_POST["pw"])) {
	$_SESSION['msg'] = "ID又はパスワードが入力されていません";
	header("Location: login.php");
} else {
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pw = mysqli_real_escape_string($conn, $_POST['pw']);
$name = mysqli_real_escape_string($conn, $_POST['name'];
$sql = "insert into member (id, pw, name) values ('$id','$pw','$name');";
mysqli_query($conn, $sql) or die(mysql_error($sql));
$sql = "SELECT id, pw FROM user WHERE id='$id';";
$res_all = mysqli_query($conn, $sql) or die("Error: エラーが発生しました");
while ($r = mysqli_fetch_array($res_all)) {
$idenc = $r['id'];
$pwenc = $r['pw'];
}
if(isset($_POST["login"])) {
	if($encid == $idenc && $encpw == $pwenc) {
		session_regenerate_id(TRUE);
		$_SESSION["ID"] = $_POST["id"];
		header("Location: index.php");
	}
	else {
		$_SESSION['msg'] = "ユーザー名又はパスワードが間違っています";
		header("Location: login.php");
	}
}
}