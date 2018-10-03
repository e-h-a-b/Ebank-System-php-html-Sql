<?php
$host = "mysql.hostinger.in";
$user = "u856423732_egyba";
$pass = "9874123951753";
$data = "u856423732_bank";

//$host = "mysql.hostinger.in";
//$user = "u856423732_try";
//$pass = "123456789";
//$data = "u856423732_messa";

$con = new mysqli($host, $user, $pass, $data);

if($con->connect_errno)
{
    printf("Connect failed: %s\n", $con->connect_error);
}