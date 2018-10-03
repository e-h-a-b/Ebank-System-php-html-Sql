<?php

	session_start();
	require_once 'dbconnect.php';
	if (!isset($_SESSION['user'])) {
		header("Location: index.php");
	} else if(isset($_SESSION['user'])!="") {
		header("Location: home.php");
	}
	
	if (isset($_GET['logout'])) {
		$us=$_SESSION['user'];
		mysql_query('update users set pers="off" where userId="'.$us.'"');
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		
		header("Location: index.php");
		exit;
	}