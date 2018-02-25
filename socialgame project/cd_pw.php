<?php
require_once("_config.php");
session_start();
$msg = (empty($_SESSION['msg']))?null:$_SESSION['msg'];
$HTML = <<<EOL
<h1>Galaxy Development</h1>
<a href="index.php">戻る</a><br />
<form action="cdpw.php" method="post" name="delete">
<dt>
<dd style="margin-left:2em;">現在のパスワード<input type="text" name="currentpw" />　新しいパスワード<input type="password" name="newpw" />　<input type="submit" name="cdpw" class="button" value="変更" /></dd>
</dt>
</form>
<div class="msg">$msg</div>
</div><!-- /content -->
</div><!-- /page -->
EOL;
echo $HTML;