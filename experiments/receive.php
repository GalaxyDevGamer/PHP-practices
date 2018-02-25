<?php

// テーブル追加プログラム

require_once( "_config.php" );

$fullname = mysqli_real_escape_string( $conn, $_POST['fullname'] );
$email = mysqli_real_escape_string( $conn, $_POST['email'] );
$addr = mysqli_real_escape_string( $conn, $_POST['addr'] );
$state = $_POST['state'];

if ( empty( $fullname ) || empty( $email ) || empty( $addr ) ) {
	die( "Error: Input Empty!" );
}

$sql = <<<EOL
INSERT INTO member ( fullname, email, addr ) VALUES ( '$fullname', '$email', '$addr' );
EOL;

$res_all = mysqli_query( $conn, $sql ) or die( "Error: $sql" );

header( "Location: table_show.php" );
