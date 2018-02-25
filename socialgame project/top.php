<?php
require_once("_config.php");
if (!empty($_SESSION['top'])) {
	$HTML = <<<EOL
<h1>Galaxy Development</h1>
<a href="index.php">TOP</a><br /><br />
<a href="login.php">新規会員登録/ログイン</a><br /><br />
<a href="">ダウンロード</a><br /><br />
<a href="member.php">関係者のみ</a><br><br>
EOL;
echo $HTML;
echo "サーバーの安定性を維持するために現在は会員のみがアクセスできるようになっています。<br>アクセスする場合は会員登録をお願いします。<br>現在ログインシステム仕様変更のためのメンテナンスを行っているためログイン及び会員登録は出来ません。<br>完了までしばらくお待ちください。";
$HTML = <<<EOL
<body><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
<div class="fb-like" data-href="http://galaxy-development.info" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="box_count" data-action="like" data-show-faces="true" data-send="false"></div>
<a href="https://twitter.com/share?count=vertical" class="twitter-share-button" data-via="KSGalaxy_intel" data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
EOL;
echo $HTML;
unset($_SESSION['top']);
$_SESSION['login'] = true;
}
else
	header("Location: index.php");