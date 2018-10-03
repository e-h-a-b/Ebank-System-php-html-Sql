<?php

include('db.php');

$action = $_GET['action'];
   
   $ps = trim($_GET['password']);
		$ps = strip_tags($ps);
		$ps = htmlspecialchars($ps);
   // password hashing using SHA256
//$password = $con->real_escape_string(md5($_GET['password']));	
   
$chtnm=$con->real_escape_string($_GET['namechat']);
 $other=$con->real_escape_string($_GET['otheruser']);
  $mssg=$con->real_escape_string($_GET['message']);
 
 
   
$username = $con->real_escape_string($_GET['username']);
$password = $con->real_escape_string(hash('sha256', $ps));
$mob = $con->real_escape_string($_GET['mob']);
$email = $con->real_escape_string($_GET['email']);
$phone = $con->real_escape_string($_GET['phone']);
$image = $con->real_escape_string($_GET['image']);

$id1 = $con->real_escape_string($_GET['id1']);
$id2 = $con->real_escape_string($_GET['id2']);
$req = $con->real_escape_string($_GET['req']);

$wat = $con->real_escape_string($_GET['wat']);
$acep = $con->real_escape_string($_GET['acep']);
$refuse = $con->real_escape_string($_GET['refuse']);

$nm = $con->real_escape_string($_GET['nm']);
$messege = $con->real_escape_string($_GET['messege']);
$id1 = $con->real_escape_string($_GET['id1']);
$time = $con->real_escape_string($_GET['time']);

// here add project
//id-code,date-pro,lat,lng,pric,nu,pernu,pernum,nuorworker,perid

$n1 = $con->real_escape_string($_GET['idcode']);
$n2 = $con->real_escape_string($_GET['datepro']);
$n3 = $con->real_escape_string($_GET['lat']);
$n4 = $con->real_escape_string($_GET['lng']);
$n5 = $con->real_escape_string($_GET['pric']);
$n6 = $con->real_escape_string($_GET['nu']);
$n7 = $con->real_escape_string($_GET['pernu']);
$n8 = $con->real_escape_string($_GET['pernum']);
$n9 = $con->real_escape_string($_GET['nuorworker']);
$n10 = $con->real_escape_string($_GET['perid']);

 

if(!$action)
{
	echo "Please enter an action.";
}
else
{	
	if($action == "register")
	{
		if($query = $con->query("INSERT INTO users (userName,userPass,mobile,telephone,userEmail,userpic) VALUES ('$username','$password','$mob','$phone','$email','$image')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "enterchat")
	{
		$sqml = "SELECT * FROM users WHERE userName='$chtnm'";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
    $chtid= $rw['userId'];
}}
		if($query = $con->query("INSERT INTO userchat (id,name) VALUES ('$chtid','$chtnm')"))
		{
			echo "1";
		  
}
		else
		{
			echo "0";
		}
		
	}
	else if($action == "perivchat")
	{
		$sqml = "SELECT * FROM users WHERE userName='$chtnm'";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
    $chtid1= $rw['userId'];
}}
	$sqmnl = "SELECT * FROM users WHERE userName='$other'";
$romns=$con->query($sqmnl);
if($romns->num_rows>0){
while($rnw=$romns->fetch_assoc()){
    $chtid2= $rnw['userId'];
}}
		if($query = $con->query("INSERT INTO pervchat (id1,id2,messg,date,sender,sendername,openform) VALUES ('$chtid1','$chtid2','$mssg','$time','$chtid1','$chtnm','')"))
		{
			echo "1";
		  
}
		else
		{
			echo "0";
		}
		
	}
	else if($action == "readperivchat")
	{
	 		$sqml = "SELECT * FROM users WHERE userName='$chtnm'";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
    $chtid1= $rw['userId'];
}}
	$sqmnl = "SELECT * FROM users WHERE userName='$other'";
$romns=$con->query($sqmnl);
if($romns->num_rows>0){
while($rnw=$romns->fetch_assoc()){
    $chtid2= $rnw['userId'];
}}
     $query = $con->query("SELECT * FROM pervchat WHERE ((id1 = '$chtid1' AND id2= '$chtid2') OR (id1 = '$chtid2' AND id2='$chtid1'))");
		
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		
		{
		

$sql = "SELECT * FROM pervchat  WHERE ((id1 = '$chtid1' AND id2= '$chtid2') OR (id1 = '$chtid2' AND id2='$chtid1'))";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
    echo $row['sendername'].':'.$row['messg'];
echo '####';
	
}  
}
			
			

			
			
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "openform")
	{
$sqml = "SELECT * FROM users WHERE userName='$chtnm'";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
    $chtid1= $rw['userId'];
}}
 
		$query = $con->query("SELECT * FROM pervchat WHERE openform='' and id2='$chtid1'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
					$sqnuunl = "SELECT * FROM pervchat  WHERE  openform='' and id2='$chtid1'";
$ronuuns=$con->query($sqnuunl);
if($ronuuns->num_rows>0){
while($rnuunow=$ronuuns->fetch_assoc()){
  
	   echo $rnuunow['sendername'];
   
}  
}
		
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "clearform")
	{
$sqml = "SELECT * FROM users WHERE userName='$chtnm'";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
    $chtid1= $rw['userId'];
}}

	  
$sql = "UPDATE pervchat SET openform='close' WHERE id1 = '$chtid1' or id2= '$chtid1' ";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
		
	}
	else if($action == "insidechat")
	{
$query = $con->query("SELECT * FROM userchat  ");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
					$sql = "SELECT * FROM userchat ";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
    echo $row['name'];
	echo '####';
}  
}
		
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "getferind")
	{
		
		$sqml = "SELECT * FROM users WHERE userName='$chtnm'";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
    $chtid1= $rw['userId'];
}}
$query = $con->query("SELECT * FROM Ferinds WHERE user1 = '$chtid1' or user2= '$chtid1'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
$sql = "SELECT * FROM Ferinds WHERE user1 = '$chtid1' or user2= '$chtid1'";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
	$fr=$row['user1'];
	$fr1=$row['user2'];
    	$qu = $con->query("SELECT * FROM users WHERE userId='$fr' or userId='$fr1'");
		$cvnt = $qu->num_rows;
		
		if($cvnt > 0)
		{
					$sq = "SELECT * FROM users WHERE userId='$fr' or userId='$fr1'";
$ro=$con->query($sq);
if($ro->num_rows>0){
while($rcw=$ro->fetch_assoc()){
     if($rcw['userName']==$chtnm){
		 
	 }else{
		echo $rcw['userName'];
	echo '####'; 
	 }
	
}  
}
		
		}
	
}  
}
		
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "outchat")
	{
$sqbl = "DELETE FROM userchat WHERE name='".$chtnm."'";

if ($con->query($sqbl) === TRUE) {
    echo "1";
} else {
    echo "0" . $conn->error;
}
	
	}
	else if($action == "login")
	{
		$query = $con->query("SELECT * FROM users WHERE userName = '$username' and userPass = '$password'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
			
			echo "enter";
		
			
			
        
 
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "loginout")
	{
		  
		session_unset();
		session_destroy();
		
		if(session_unset())
		{
			
			echo "out";
		
		}
		else
		{
			echo "0";
		 
		session_unset();
		session_destroy();
		}
	}
	else if($action == "mob")
	{
		$query = $con->query("SELECT * FROM users WHERE userName='$username' and userPass='$password' ");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
					$sql = "SELECT * FROM users WHERE userName='$username' and userPass='$password' ";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
    echo $row['mobile'];
}  
}
		
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "email")
	{
		$query = $con->query("SELECT * FROM users WHERE userName='$username' and userPass='$password' ");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
					$sql = "SELECT * FROM users WHERE userName='$username' and userPass='$password' ";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
    echo $row['userEmail'];
}  
}
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "phone")
	{
		$query = $con->query("SELECT * FROM users WHERE userName='$username' and userPass='$password' ");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
					$sql = "SELECT * FROM users WHERE userName='$username' and userPass='$password' ";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
    echo $row['telephone'];
}  
}
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "pic")
	{
		$query = $con->query("SELECT * FROM users WHERE username='$username' and userPass='$password' ");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
					$sql = "SELECT * FROM users WHERE username='$username' and userPass='$password' ";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
    echo $row['userpic'];
}  
}
			
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "nm")
	{
		$query = $con->query("SELECT * FROM users WHERE userName = '$username' and userPass = '$password'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
		$sql="SELECT * FROM users WHERE userName='$username' and userPass='$password'";
$result=$con->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo $row["userName"];
	}
}else{
		echo "0 results";
}
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "add")
	{
		
		if($query = $con->query("INSERT INTO frnds (id1,id2,req,wat,acep,refuse) VALUES ('$id1','$id2','$req','$wat','$acep','$refuse')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "readmessege")
	{
		
         
     $query = $con->query("SELECT * FROM users WHERE userName = '$username' and userPass = '$password'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		
		{
			/*$sql = "SELECT `messege` FROM `chat`";
			$ingredients = $con->query($sql)->fetchAll(PDO::FETCH_COLUMN);
			$sql = "SELECT * FROM `chat` WHERE id1=(SELECT MAX(nm) FROM `chat`)";
			$ing = $con->query($sql);
			while ($row = $ing->fetch_assoc()) {
    echo $row['nm'];
}*/

$sql = "SELECT * FROM chat ";
$ros=$con->query($sql);
if($ros->num_rows>0){
while($row=$ros->fetch_assoc()){
    echo $row['messege'].'      '.$row['time'];
echo '####';
	
}  
}
			
			

			
			
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "wrmsge")
	{
		$sqlm = "SELECT id1 FROM chat ";
		$rosm=$con->query($sqlm);
		$dnm2 = $rosm->num_rows;
			$id1 = $dnm2+1;
		if($quer = $con->query("INSERT INTO chat (nm,messege,id1,time) VALUES ('$nm','$messege','$id1','$time')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "set")
   {
    $rusers = fopen("users.txt","r") or die("Error!");
    $count = fread($rusers,filesize("users.txt"));
    $txt = $count += 1;
   
    $wusers = fopen("users.txt","w") or die("Error!");
    fwrite($wusers,$txt);
    fclose($wusers);
    fclose($rusers);
    }
    else if($action == "get")
    {
    $rusers = fopen("users.txt","r") or die("Error!");
    $count = fread($rusers,filesize("users.txt"));
    $txt = $count -= 1;
   
    $wusers = fopen("users.txt","w") or die("Error!");
    fwrite($wusers,$txt);
    fclose($wusers);
    fclose($rusers);
    }
	elseif($action == "addproject")
	{
		if($quer = $con->query("INSERT INTO addproject (idcode,datepro,lat,lng,pric,nu,pernu,pernum,nuorworker,perid) VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	//accept ebank project
	elseif($action == "Accept")
	{
		if($query = $con->query("INSERT INTO acep (accept,Decliend,mac,time) VALUES ('1','0','$mac','$date')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	else if($action == "Decliend")
	{
		if($query = $con->query("INSERT INTO acep (accept,Decliend,mac,time) VALUES ('0','1','$mac','$date')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
		
		}
	 else if($action =="NumAccept")
	{
		$query = $con->query("SELECT Accept FROM acep WHERE Accept='1' and Decliend='0'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
				 
        echo $cnt;

        } 
		 
		 
		else
		{
			echo "0";
		}
		 
	 }
	else if ($action =="NumDecliend")
	{
		
	    $query = $con->query("SELECT Decliend FROM acep WHERE Decliend='1' and Accept='0'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
				 
        echo $cnt;

        }
 
		
		 
		else
		{
			echo "0";
		}		
	}
	else if ($action =="check")
	{
		
	   $query = $con->query("SELECT mac FROM acep WHERE mac = '$mac'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
			
			echo "stop";
		
		}
		else
		{
			echo "0";
		}
		
	}
		//accept ebank project
	//yanasb
		else if ($action =="yanasb")
	  {
		$dn2 = mysql_num_rows(mysql_query('select id from yanasb'));
		$id = $dn2+1;
	   if($query = $con->query("INSERT INTO yanasb (id,code,winNum,mac,time) VALUES ('$id','$code','','','')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	  else if ($action =="setmac")
	  {
		 
	   $query = $con->query("SELECT code FROM yanasb WHERE code = '$code'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
			$query = $con->query("INSERT INTO yanasb (mac,time) VALUES ('$mac','$date')");
			
		
		}
		else
		{
			echo "0";
		}
		
	}
		else if ($action =="read")
	{
		
	    $sqml = "SELECT code FROM yanasb WHERE mac=''";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
    echo $rw['code'];
	echo '####';
}}
		
 
		
		 
		else
		{
			echo "0";
		}		
	}
	//yanasb
	
	else
	{
		echo "Invalid action.";
	}
}

?>