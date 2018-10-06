<?php
$db_username = 'u856423732_egyba';
$db_password = '9874123951753';
$db_name = 'u856423732_bank';
$db_host = 'mysql.hostinger.in';
$item_per_page = 5;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}