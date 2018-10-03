<?php
	 
	$id = $_GET['id'];
	  $table=mysql_query('SELECT * FROM `Devpage` WHERE `A`="'.$id.'"');
  while($row1=mysql_fetch_array($table))
  {
	  $res=$row1['Visitor'];
 
 }  
 
	$res=$res+1;
	mysql_query('update Devpage set Visitor="'.$res.'" where A="'.$id.'"');
 
	?>