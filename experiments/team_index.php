<?php
require_once( "_config.php" );
session_start();
if (isset($_SESSION["ID"])) {
echo "ようこそ" . $_SESSION["ID"] . "さん";
$HTML = <<<EOL
<form action="logout.php" method="post">
<input type="submit" id="logout" class="button" value="ログアウト" />
</form>
EOL;
 
}
$title = "Galaxy Developer Team";
$HTML = <<<EOL
<form action="login.php" method="post">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">ログイン</span></dl>
<dd style="margin-left:2em;">ID<input type="text" id="id" name="id" />　パスワード<input type="password" id="pw" name="pw" />　<input type="submit" id="login" name="id" class="button" value="ログイン" /></dd>
</dt>
</form>
<form action="register.php" method="post">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">登録</span></dl>
<dd style="margin-left:2em;">ID<input type="text" id="id" name="id" />メールアドレス<input type="text" id="email" name="email" />パスワード<input type="password" id="pw" name="pw" />　<input type="submit" class="button" value="登録" /></dd>
</dt>
</form>
EOL;
echo $HTML;
?>
