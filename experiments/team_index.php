<?php
require_once( "_config.php" );
session_start();
if (isset($_SESSION["ID"])) {
echo "�悤����" . $_SESSION["ID"] . "����";
$HTML = <<<EOL
<form action="logout.php" method="post">
<input type="submit" id="logout" class="button" value="���O�A�E�g" />
</form>
EOL;
 
}
$title = "Galaxy Developer Team";
$HTML = <<<EOL
<form action="login.php" method="post">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">���O�C��</span></dl>
<dd style="margin-left:2em;">ID<input type="text" id="id" name="id" />�@�p�X���[�h<input type="password" id="pw" name="pw" />�@<input type="submit" id="login" name="id" class="button" value="���O�C��" /></dd>
</dt>
</form>
<form action="register.php" method="post">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">�o�^</span></dl>
<dd style="margin-left:2em;">ID<input type="text" id="id" name="id" />���[���A�h���X<input type="text" id="email" name="email" />�p�X���[�h<input type="password" id="pw" name="pw" />�@<input type="submit" class="button" value="�o�^" /></dd>
</dt>
</form>
EOL;
echo $HTML;
?>
