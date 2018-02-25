<?php
require_once("_config.php");
include_once 'Crypt/Blowfish.php';
$key = 'BlowfishSecret';
$blowfish = new Crypt_Blowfish($key);
session_start();
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pw = mysqli_real_escape_string($conn, $_POST['pw']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = $_POST['age'];
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
if(empty($name)||!is_numeric($age)||$_POST["sex"]=="性別"||empty($id)||empty($pw)||empty($email)||empty($_POST["check"])){
	$_SESSION['msg2'] = "すべて入力必須です";
	header("Location: login.php");
} else {
	$name = $blowfish->encrypt($name);
	$pw = $blowfish->encrypt($pw);
	$email = $blowfish->encrypt($email);
	$sql = "SELECT id FROM user WHERE id='$id';";
	$res = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($res)) {
		if($row['id'] == $id) {
			$_SESSION['msg2'] = "入力されたIDはすでに登録されています";
			header("Location: login.php");
			exit();
		}
	}
	$sql2 = "SELECT email FROM user WHERE email='$email';";
	$res2 = mysqli_query($conn, $sql2);
	while($eml = mysqli_fetch_array($res2)) {
		if($eml['email'] == $email) {
			$_SESSION['msg2'] = "入力されたメールアドレスはすでに登録されています";
			header("Location: login.php");
			exit();
		}
	}
	$sql = "INSERT INTO user (id, name, age, sex, email, pw) VALUES ('$id','$name',$age,'$sex','$email','$pw');";
	mysqli_query($conn, $sql) or die(mysql_error($sql));
	session_regenerate_id(TRUE);
	$_SESSION["ID"] = $_POST["id"];
	header("Location: index.php");
}
?>