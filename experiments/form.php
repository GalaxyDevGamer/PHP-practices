<?php

// _bgs_login.php: Battle Game Skelton���O�C�����o�^��ʃf�[�^�쐬

if ( !empty( $_SESSION['login'] ) ) {
	$HTML .= <<<EOL
<form action="$SELF" method="post" name="login" onsubmit="return func_login();">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">���O�C��</span></dl>
<dd style="margin-left:2em;">�����A�h<input type="text" name="id" />�@�p�X���[�h<input type="password" name="pw" />�@<input type="submit" class="button" value="���O�C��" /></dd>
</dt>
</form>
<form action="$SELF" method="post" name="bgs_reg" onsubmit="return func_reg();">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">�o�^</span></dl>
<dd style="margin-left:2em;">�n���h����<input type="text" name="bgs_fullname" />�@�����A�h<input type="text" name="bgs_email" />�@�p�X���[�h<input type="password" name="bgs_pass" />�@<input type="submit" class="button" value="�o�^" /></dd>
</dt>
</form>
<form action="bgs_mktbl.php" onsubmit="return func_mktbl();">
<dt>
<dl style="margin-top:1em;"><span style="font-weight:bold;">�e�[�u�����Z�b�g</span></dl>
<dd style="margin-left:2em;"><input type="submit" class="button" name="bgs_mktbl" value=" �e�[�u�����Z�b�g " /></dd>
</dt>
</form>
<div class="msg">$msg</div>
</div><!-- /content -->
</div><!-- /page -->

<script type="text/javascript">
<!--
function func_login() {
	if ( document.login.id.value == '' || document.login.pw.value == '' ) {
		alert( '���O�C��ID�ƃp�X���[�h����͂��ĉ�����' );
		return false;
	}
	else
		return true;
}

function func_reg() {
	if ( document.reg.name.value == '' || document.email.value == '' || document.pass.value == '' )  {
		alert( '�n���h�����A���O�C��ID�A�p�X���[�h�͂��ׂē��͂��ĉ�����' );
		return false;
	}
	else
		return confirm( '�o�^���Ă�낵���ł����H' );
}

function func_mktbl() {
	return confirm( '�e�[�u�������ׂď��������Ă�낵���ł��傤���H' );
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
