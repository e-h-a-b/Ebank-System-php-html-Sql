<?php
 
	require_once 'dbconnect.php';
	include('config.php');
	
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	echo $userRow['coment'];
	
if (isset($_POST['btnupd'])) {
             	//We protect the variables
				$adrs= trim($_POST['upd']);
		        $adrs= strip_tags($adrs);
		        $adrs= htmlspecialchars($adrs);
		
		
	
	$result = mysql_query("UPDATE users SET coment='".$_POST['upd']."' WHERE userId='".$userRow['userId']."'");
$sql = "UPDATE `users` SET `coment`='".$_POST['upd']."' WHERE `userId`='".$userRow['userId']."'";
}
	
	
	
	?>