<?php
session_start();

$msg = ( empty( $_SESSION['msg'] ) ) ? null : $_SESSION['msg'];

$msg2 = (empty($_SESSION['msg2']))?null:$_SESSION['msg2'];

$_SESSION['msg2'] = "";

if (isset($_SESSION['login'])) {

	$HTML = <<<EOL

<h1>Galaxy Development</h1>

<a href="index.php">TOP</a><br />

<form action="member_login.php" method="post" name="login">

<dt>

<dl style="margin-top:1em;"><span style="font-weight:bold;">メンバー専用ログイン</span></dl>

<dd style="margin-left:2em;">ID<input type="text" id="id" name="id" /><br />パスワード<input type="password" id="pw" name="pw" /><br />氏名<input type="text" name="name" /><br><input type="submit" id="login" name="login" class="button" value="ログイン" /></dd>

</dt>

</form>

<div class="msg">$msg</div>

</div><!-- /content -->

</div><!-- /page -->
EOL;
echo $HTML;
}