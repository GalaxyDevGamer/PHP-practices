<script type="text/javascript">
yesno = confirm("‘Þ‰ï‚µ‚Ü‚·‚©?");
</script>
<?php
require_once("_config.php");
session_start();
$id = $_SESSION["ID"];
$sql = "DELETE FROM user WHERE id='$id';";
mysqli_query($conn, $sql);
$_SESSION = array();
@session_destroy();
header("Location: index.php");
?>