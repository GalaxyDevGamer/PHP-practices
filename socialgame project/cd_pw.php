<?php
require_once("_config.php");
session_start();
$msg = (empty($_SESSION['msg']))?null:$_SESSION['msg'];
$HTML = <<<EOL
<h1>Galaxy Development</h1>
<a href="index.php">�߂�</a><br />
<form action="cdpw.php" method="post" name="delete">
<dt>
<dd style="margin-left:2em;">���݂̃p�X���[�h<input type="text" name="currentpw" />�@�V�����p�X���[�h<input type="password" name="newpw" />�@<input type="submit" name="cdpw" class="button" value="�ύX" /></dd>
</dt>
</form>
<div class="msg">$msg</div>
</div><!-- /content -->
</div><!-- /page -->
EOL;
echo $HTML;