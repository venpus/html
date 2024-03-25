<?php
	session_start();
	if(isset($_SESSION['username'])){
		$status_login = TRUE;
	}
	else{
		$status_login = FALSE;
	}
	$DB_ADDR="localhost";
	$DB_USER="dev001";
	$DB_PASS="dev_admin";
	$DB_NAME="labsemble";
?>