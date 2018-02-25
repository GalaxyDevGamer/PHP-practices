<?php
require_once( "_config.php" );
session_start();
$msg = ( empty( $_SESSION['msg'] ) ) ? null : $_SESSION['msg'];
$_SESSION['msg'] = "";
$HTML = null;
$SELF = $_SERVER['PHP_SELF'];
if (!isset($_SESSION["ID"])) {
	$_SESSION['top'] = true;
	$_SESSION['login'] = true;
	require_once('top.php');
} else {
$HTML = <<<EOL
<h1>Galaxy Development</h1>
EOL;
echo $HTML;
echo "ようこそ" . $_SESSION["ID"] . "さん<br />\n";
$HTML = <<<EOL
<a href="cd_pw.php">パスワード変更</a><br />
<form action="logout.php" method="post">
<input type="submit" id="logout" value="ログアウト" />
</form>
<form action="delete.php" method="post">
<input type="submit" id="delete" value="退会" />
</form>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fgalaxy-development.info&amp;width=The+pixel+width+of+the+plugin&amp;height=65&amp;colorscheme=light&amp;layout=box_count&amp;action=like&amp;show_faces=true&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:The pixel width of the pluginpx; height:65px;" allowTransparency="true"></iframe>
EOL;
echo $HTML;
}
?>
