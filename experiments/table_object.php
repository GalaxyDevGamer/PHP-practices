<?php
if ( !empty( $_SESSION['table_object'] ) ) {

	// bgs_castテーブルINSERT用
	$insert = array( 'name', 'email', 'pass' );

	// bgs_castテーブルSELECT用
	$acc = array( 'name', 'pass', 'email' );

	unset( $_SESSION['table_object'] );
}

else
	header( "Location: index.php" );