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

<dl style="margin-top:1em;"><span style="font-weight:bold;">���O�C��</span></dl>

<dd style="margin-left:2em;">ID<input type="text" id="id" name="id" /><br />�p�X���[�h<input type="password" id="pw" name="pw" /><br /><input type="submit" id="login" name="login" class="button" value="���O�C��" /></dd>

</dt>

</form>

<div class="msg">$msg</div>

</div><!-- /content -->

</div><!-- /page -->

<form action="register.php" name="register" method="post">

<dt>

<dl style="margin-top:1em;"><span style="font-weight:bold;">�o�^</span></dl>

<dd style="margin-left:2em;">����<input type="text" name="name" /><br />�N��<input type="text" name="age" /><br />����<select name="sex"><option value="����">�I�����Ă�������</option><option value="�j">�j��</option><option value="��">����</option></select><br />ID<input type="text" id="id" name="id" /><br />���[���A�h���X<input type="text" id="email" name="email" /><br />�p�X���[�h<input type="password" id="pw" name="pw" /><br /><input type="checkbox" name="check" value="���p�K��" />���p�K��ɓ��ӂ��܂�<br /><input type="submit" class="button" value="�o�^" /></dd>

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

Galaxy Development<br /><br />���p�K��F<br />�E�{�T�C�g�̉���͗��p�K��ɓ��ӂ��Ă��邱�ƂƂ���<br />�E�Ǘ��҂��T�C�g������������܂ŖK��҂̓R���e���c�ɃA�N�Z�X����ɂ͉���o�^��K�v�Ƃ���<br />�E����͂��ł��މ�\�Ƃ���<br />�E�T�C�g�̎d�l�ύX��V�@�\�����̂��߂ɐV���ɉ������ǉ�����K�v�����鎞�A����͉�����̒ǉ�(�X�V)���͑މ�̂����ꂩ�����s���邱�ƂƂ���<br />�E�Ǘ��҂͂��ł��T�C�g�̎d�l�̕ύX�y�эX�V���\�Ƃ���<br />�E�Ǘ��҂͉���̏����𓾂��T�C�g����A�T�C�g�ւ̈ꎞ�I�ȃA�N�Z�X����(�X�V�����y�[�W�f�[�^�̃e�X�g�̂��߂̃|�[�g����Z�L�����e�B�̌�������)���\�Ƃ���<br />�E�T�[�o�[���_�E������ȂǃT�C�g�ɃA�N�Z�X�ł��Ȃ��ꍇ��\�����Ȃ��f�[�^�̏����ɂ�鑹�Q���ɂ��ĊǗ��҂͐ӔC�𕉂�Ȃ����ƂƂ���<br />�E����̕s���s�ׁA�K��ᔽ�y�ъǗ��҂�����Ƃ��đ��������Ȃ��Ɣ��f�����ꍇ�A�Ǘ��҂͉���̏����𓾂��A�����މ���邱�Ƃ��\�Ƃ���<br />�E�{�T�C�g�̑S�ẴR���e���c�A�z�z���Ă���t�@�C���̒��쌠�͊Ǘ��҂ɂ�����̂Ƃ��A�{�T�C�g�ɐݒu���Ă���Facebook�ATwitter�ł̃V�F�A�������A���f�ł̓]�ڂ͕s�Ƃ���(�A���A�Ǘ��҂����ʂɋ������ꍇ������)<br /><br />�ȏ�B

</DIV><BR>

EOL;

echo $HTML;

} else {

	header("Location: index.php");

}
