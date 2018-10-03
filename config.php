<?php
//We start sessions
session_start();
// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the members area
can work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('mysql.hostinger.in', 'u856423732_egyba', '9874123951753');
mysql_select_db('u856423732_bank');

//Webmaster Email
$mail_webmaster = 'example@example.com';

//Top site root URL
$url_root = 'http://www.example.com/';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = 'index.php';

//Design Name
$design = 'default';






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