<?php
require_once 'dbconnect.php';
	 
                $idper= trim($_POST['idpers']);
		        $idper= strip_tags($idper);
		        $idper= htmlspecialchars($idper);
 
               
 
 		mysql_query("INSERT INTO `supportcustom` (`me`, `id`) VALUES ('0', '$new')");
        mysql_query("INSERT INTO `support` (`id`, `message`, `time`, `you`, `me`, `fryou`) VALUES ('0', '$idper', '00:00', '$new', '0', '1')");






?>