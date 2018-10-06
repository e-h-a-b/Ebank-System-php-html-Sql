<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	define('DBHOST', 'mysql.hostinger.in');
	define('DBUSER', 'u856423732_egyba');
	define('DBPASS', '9874123951753');
	define('DBNAME', 'u856423732_bank');
	
	//$conn = @mysql_connect('DBHOST','DBUSER','DBPASS');
	
	$conn = mysql_connect(DBHOST, DBUSER, DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	$connect = mysqli_connect("mysql.hostinger.in", "u856423732_try", "123456789", "u856423732_messa");

	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}

?>