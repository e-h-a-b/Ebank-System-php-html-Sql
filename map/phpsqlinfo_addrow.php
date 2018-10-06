<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	define('DBHOST', 'mysql.hostinger.in');
	define('DBUSER', 'u856423732_egyba');
	define('DBPASS', '9874123951753');
	define('DBNAME', 'u856423732_bank');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}

require("phpsqlinfo_dbinfo.php");

// Gets data from URL parameters
$name = $_GET['name'];
$address = $_GET['address'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$type = $_GET['type'];

// Opens a connection to a MySQL server
$connection=mysql_connect ('mysql.hostinger.in', 'u856423732_egyba', '9874123951753');
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db(DBNAME, $conn);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Insert new row with user data
$query = sprintf("INSERT INTO markers " .
         " (id, name, address, lat, lng, type ) " .
         " VALUES (NULL, '%s', '%s', '%s', '%s', '%s');",
         mysql_real_escape_string($name),
         mysql_real_escape_string($address),
         mysql_real_escape_string($lat),
         mysql_real_escape_string($lng),
         mysql_real_escape_string($type));

$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}

?>