<?php
// 年のプルダウン
echo "<SELECT>";
for ($y=2000;$y<date(Y)+1;$y++) {
    echo "<OPTION value=" . $y . " >" . $y . "</OPTION>\n";
}
echo "</SELECT>年";
// 月のプルダウン
$a = array("1月", "2月", "3月", "4月", "5月", "6月",
           "7月", "8月", "9月", "10月", "11月", "12月");
echo "<SELECT>";
foreach ($a as $key => $value) {
    $b = $key + 1;
    echo "<OPTION value=" . $b . " >" . $value . "</OPTION>\n";
}
echo "</SELECT>";
?>