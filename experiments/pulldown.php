<?php
// �N�̃v���_�E��
echo "<SELECT>";
for ($y=2000;$y<date(Y)+1;$y++) {
    echo "<OPTION value=" . $y . " >" . $y . "</OPTION>\n";
}
echo "</SELECT>�N";
// ���̃v���_�E��
$a = array("1��", "2��", "3��", "4��", "5��", "6��",
           "7��", "8��", "9��", "10��", "11��", "12��");
echo "<SELECT>";
foreach ($a as $key => $value) {
    $b = $key + 1;
    echo "<OPTION value=" . $b . " >" . $value . "</OPTION>\n";
}
echo "</SELECT>";
?>