<?php

// テーブルリセットプログラム

require_once( "_config.php" );

CREATE TABLE members (
	id			INTEGER PRIMARY KEY AUTO_INCREMENT,
	fullname	VARCHAR(32),
	email		VARCHAR(64),
	addr		VARCHAR(128),
	state		VARCHAR,
);
EOL;
$res_all = mysqli_query( $conn, $sql ) or die( "Error: $sql" );

header( "Location: table_show.php" );
