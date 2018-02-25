<?php

// _bgs_login.php: Battle Game Skeltonログイン＆登録画面データ作成

if ( !empty( $_SESSION['login'] ) ) {
	$HTML .= <<<EOL
<form action="$SELF" method="post" name="login" onsubmit="return func_login();">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">ログイン</span></dl>
<dd style="margin-left:2em;">メルアド<input type="text" name="id" />　パスワード<input type="password" name="pw" />　<input type="submit" class="button" value="ログイン" /></dd>
</dt>
</form>
<form action="$SELF" method="post" name="bgs_reg" onsubmit="return func_reg();">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">登録</span></dl>
<dd style="margin-left:2em;">ハンドル名<input type="text" name="bgs_fullname" />　メルアド<input type="text" name="bgs_email" />　パスワード<input type="password" name="bgs_pass" />　<input type="submit" class="button" value="登録" /></dd>
</dt>
</form>
<form action="bgs_mktbl.php" onsubmit="return func_mktbl();">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">テーブルリセット</span></dl>
<dd style="margin-left:2em;"><input type="submit" class="button" name="bgs_mktbl" value=" テーブルリセット " /></dd>
</dt>
</form>
<div class="msg">$msg</div>
</div><!-- /content -->
</div><!-- /page -->

<script type="text/javascript">
<!--
function func_login() {
	if ( document.login.id.value == '' || document.login.pw.value == '' ) {
		alert( 'ログインIDとパスワードを入力して下さい' );
		return false;
	}
	else
		return true;
}

function func_reg() {
	if ( document.reg.name.value == '' || document.email.value == '' || document.pass.value == '' )  {
		alert( 'ハンドル名、ログインID、パスワードはすべて入力して下さい' );
		return false;
	}
	else
		return confirm( '登録してよろしいですか？' );
}

function func_mktbl() {
	return confirm( 'テーブルをすべて初期化してよろしいでしょうか？' );
}
//-->
</script>
</body>
</html>
EOL;

	unset( $_SESSION['login'] );
}

else
	header( "Location: login.php" );
