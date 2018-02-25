<?php
$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASS = '4869gin';
$DBNAME = 'member';

$conn = mysqli_connect( $DBHOST, $DBUSER, $DBPASS, $DBNAME ) or die( "DB CONNECT ERROR" );