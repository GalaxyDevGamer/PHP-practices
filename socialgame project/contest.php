<?php
$DBHOST = '127.0.0.1';
$DBUSER = 'root';
$DBPASS = '4869gin';
$DBNAME = 'contest';

$conn = mysqli_connect( $DBHOST, $DBUSER, $DBPASS, $DBNAME ) or die( "DB CONNECT ERROR" );