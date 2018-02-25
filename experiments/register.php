<?php
require_once("_config.php");
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pw = mysqli_real_escape_string($conn, $_POST['pw']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
if(empty($id)||empty($pw)||empty($email)){
	die("ERROR: ‚·‚×‚Ä“ü—Í•K{‚Å‚·");
}
$sql = <<<EOL
INSERT INTO user (id, pw, email) VALUES ('$id','$pw','$email');
EOL;
$res_all = mysqli_query($conn, $sql) or die("ERROR: $sql");
header("Location: team_index.php");