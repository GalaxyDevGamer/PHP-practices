<?php
session_start();
$HTML = null;
$HTML = <<<EOL
<h1>Galaxy Development</h1>
EOL;
echo $HTML;
echo "ようこそ" . $_SESSION["NAME"] . "さん<br>";
$HTML = <<<EOL
<a href="">次回の会議</a><br>
<a href="">資料</a><br>
<a href="logout.php">ログアウト</a><br>
EOL;
echo $HTML;
?>
