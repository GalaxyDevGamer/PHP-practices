<?php
if ( !empty( $_SESSION['table_object'] ) ) {

	// bgs_cast�e�[�u��INSERT�p
	$insert = array( 'name', 'email', 'pass' );

	// bgs_cast�e�[�u��SELECT�p
	$acc = array( 'name', 'pass', 'email' );

	unset( $_SESSION['table_object'] );
}

else
	header( "Location: index.php" );