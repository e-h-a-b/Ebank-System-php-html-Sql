<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db_host='mysql.hostinger.in';
$db_user='u856423732_egyba';
$db_pwd='9874123951753';
$database='u856423732_bank';

if(!mysql_connect($db_host,$db_user,$db_pwd))
die("can't Connect to Database");

if(!mysql_select_db($database))
die("can't Select Database");
?>