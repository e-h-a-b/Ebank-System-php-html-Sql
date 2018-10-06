<?php

	$DB_HOST = 'mysql.hostinger.in';
	$DB_USER = 'u856423732_egyba';
	$DB_PASS = '9874123951753';
	$DB_NAME = 'u856423732_bank';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
	
	 ?>
