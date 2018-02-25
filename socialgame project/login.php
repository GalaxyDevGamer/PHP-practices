<?php

session_start();

$msg = ( empty( $_SESSION['msg'] ) ) ? null : $_SESSION['msg'];

$msg2 = (empty($_SESSION['msg2']))?null:$_SESSION['msg2'];

$_SESSION['msg2'] = "";

if (isset($_SESSION['login'])) {

	$HTML = <<<EOL

<h1>Galaxy Development</h1>

<a href="index.php">TOP</a><br />

<form action="login_check.php" method="post" name="login">

<dt>

<dl style="margin-top:1em;"><span style="font-weight:bold;">ログイン</span></dl>

<dd style="margin-left:2em;">ID<input type="text" id="id" name="id" /><br />パスワード<input type="password" id="pw" name="pw" /><br /><input type="submit" id="login" name="login" class="button" value="ログイン" /></dd>

</dt>

</form>

<div class="msg">$msg</div>

</div><!-- /content -->

</div><!-- /page -->

<form action="register.php" name="register" method="post">

<dt>

<dl style="margin-top:1em;"><span style="font-weight:bold;">登録</span></dl>

<dd style="margin-left:2em;">氏名<input type="text" name="name" /><br />年齢<input type="text" name="age" /><br />性別<select name="sex"><option value="性別">選択してください</option><option value="男">男性</option><option value="女">女性</option></select><br />ID<input type="text" id="id" name="id" /><br />メールアドレス<input type="text" id="email" name="email" /><br />パスワード<input type="password" id="pw" name="pw" /><br /><input type="checkbox" name="check" value="利用規約" />利用規約に同意します<br /><input type="submit" class="button" value="登録" /></dd>

</dt>

</form>

<div class="msg">$msg2</div>

</div><!-- /content -->

</div><!-- /page -->

<STYLE type="text/css">

<!--

.scr { 

overflow: scroll;

width: 500px;

height: 250px;

background-color: white;

}

-->

</STYLE>

<DIV class="scr">

Galaxy Development<br /><br />利用規約：<br />・本サイトの会員は利用規約に同意していることとする<br />・管理者がサイトを完成させるまで訪問者はコンテンツにアクセスするには会員登録を必要とする<br />・会員はいつでも退会可能とする<br />・サイトの仕様変更や新機能実装のために新たに会員情報を追加する必要がある時、会員は会員情報の追加(更新)又は退会のいずれかを実行することとする<br />・管理者はいつでもサイトの仕様の変更及び更新を可能とする<br />・管理者は会員の承諾を得ずサイトを閉鎖、サイトへの一時的なアクセス拒否(更新したページデータのテストのためのポート閉鎖やセキュリティの見直し等)を可能とする<br />・サーバーがダウンするなどサイトにアクセスできない場合や予期しないデータの消失による損害等について管理者は責任を負わないこととする<br />・会員の不正行為、規約違反及び管理者が会員として相応しくないと判断した場合、管理者は会員の承諾を得ず、会員を退会させることが可能とする<br />・本サイトの全てのコンテンツ、配布しているファイルの著作権は管理者にあるものとし、本サイトに設置しているFacebook、Twitterでのシェアを除き、無断での転載は不可とする(但し、管理者が特別に許可した場合を除く)<br /><br />以上。

</DIV><BR>

EOL;

echo $HTML;

} else {

	header("Location: index.php");

}
