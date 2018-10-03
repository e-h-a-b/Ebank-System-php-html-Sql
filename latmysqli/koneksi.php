<?php
$db_host = "mysql.hostinger.in";
$db_user = "u856423732_egyba";
$db_pass = "9874123951753";
$db_name = "u856423732_bank";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>