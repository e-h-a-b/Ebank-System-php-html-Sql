<?php
 
$host = "mysql.hostinger.in";
$user = "u465588875_egyba";
$pass = "cy4HmcjbywikxQbLjL";
$data = "u465588875_bank";


//$host1 = "mysql.hostinger.in";
//$user1 = "u465588875_m";
//$pass1 = "Gkm1oeALpCrAWaWEzs";
//$data1 = "u465588875_m";

$host1 = "mysql.hostinger.in";
$user1 = "u856423732_try";
$pass1 = "123456789";
$data1 = "u856423732_messa";
	
$date = date("F l m/ j/ Y/ g:i a  T Y");
$con1 = new mysqli($host1, $user1, $pass1, $data1);
$con = new mysqli($host1, $user1, $pass1, $data1);

if($con->connect_errno)
{
    printf("Connect failed: %s\n", $con->connect_error);
}

if($con1->connect_errno)
{
    printf("Connect failed: %s\n", $con1->connect_error);
}

$action = $_GET['action'];
   
  
 
$mac = $con->real_escape_string($_GET['mac']);
$code = $con->real_escape_string($_GET['code']); 


//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
 $nam = $con->real_escape_string($_GET['nam']);
//$date = $con->real_escape_string($_GET['date']);
 $plac = $con->real_escape_string($_GET['plac']);
$phon = $con->real_escape_string($_GET['phon']); 
$mob = $con->real_escape_string($_GET['mob']);
$usr = $con->real_escape_string($_GET['usr']);
$lag = $con->real_escape_string($_GET['lag']); 
$lth = $con->real_escape_string($_GET['lth']);  

 $facb= $con->real_escape_string($_GET['facb']);
$namof = $con->real_escape_string($_GET['namof']);
$placof = $con->real_escape_string($_GET['placof']);
$offer = $con->real_escape_string($_GET['offer']);
$prof = $con->real_escape_string($_GET['prof']);
$fax = $con->real_escape_string($_GET['fax']);
$link = $con->real_escape_string($_GET['link']);
$phonof = $con->real_escape_string($_GET['phonof']);
$mobof = $con->real_escape_string($_GET['mobof']);
//num,phon,mob,date,timr,mac,datl
$phonco = $con->real_escape_string($_GET['phonco']);
$mobco = $con->real_escape_string($_GET['mobco']);
$datl = $con->real_escape_string($_GET['datl']);
$timrco = $con->real_escape_string($_GET['timrco']);
$namco=$con->real_escape_string($_GET['namco']);
$timr=$con->real_escape_string($_GET['timr']);
 $adrs=$con->real_escape_string($_GET['adrs']);
  $faxco=$con->real_escape_string($_GET['faxco']);
  $prico=$con->real_escape_string($_GET['prico']);
  //DB project >>>  num-rent-date-plac-mach1-mach2-mach3-mach4-mach5-mach6-mach7-mach8-mach9-mach10-mach11-mach12
		//DB project >>>  pric1-pric2-pric3-pric4-pric5-pric6-pric7-pric8-pric9-pric10-pric11-pric12
	//num,nam,rent,date,phon,mob,plac
	$rent=$con->real_escape_string($_GET['mach11']);
	$placre=$con->real_escape_string($_GET['placre']);
	$phonre=$con->real_escape_string($_GET['phonre']);
	$mobre=$con->real_escape_string($_GET['mobre']);
$mach1=$con->real_escape_string($_GET['mach1']);

	$namre=$con->real_escape_string($_GET['namre']);
	$mach2=$con->real_escape_string($_GET['mach2']);
 $mach3=$con->real_escape_string($_GET['mach3']);
 $mach4=$con->real_escape_string($_GET['mach4']);
 $mach5=$con->real_escape_string($_GET['mach5']);
 $mach6=$con->real_escape_string($_GET['mach6']);
 $mach7=$con->real_escape_string($_GET['mach7']);
 $mach8=$con->real_escape_string($_GET['mach8']);
 $mach9=$con->real_escape_string($_GET['mach9']);
 $mach10=$con->real_escape_string($_GET['mach10']);
 
 $city=$con->real_escape_string($_GET['city']);
 $kind=$con->real_escape_string($_GET['kind']);
 	$phonji=$con->real_escape_string($_GET['phonji']);
		$mobji=$con->real_escape_string($_GET['mobji']);
		$timrji=$con->real_escape_string($_GET['timrji']);
		$macji=$con->real_escape_string($_GET['macji']);
		$namji=$con->real_escape_string($_GET['namji']);
		$facji=$con->real_escape_string($_GET['facji']);
		
		$macvr=$con->real_escape_string($_GET['macvr']);
		$onuser=$con->real_escape_string($_GET['onuser']);
		$offuser=$con->real_escape_string($_GET['offuser']);
		
$band=$con->real_escape_string($_GET['band']);		
$numm=$con->real_escape_string($_GET['numm']);
$amal=$con->real_escape_string($_GET['amal']);
$unit=$con->real_escape_string($_GET['unit']);
$amount=$con->real_escape_string($_GET['amount']);
$total=$con->real_escape_string($_GET['total']);


$city=$con->real_escape_string($_GET['city']);
$area=$con->real_escape_string($_GET['area']);
$companies=$con->real_escape_string($_GET['companies']);
$address=$con->real_escape_string($_GET['address']);
$phone=$con->real_escape_string($_GET['phone']);
$fax=$con->real_escape_string($_GET['fax']);
$email=$con->real_escape_string($_GET['email']);
$url=$con->real_escape_string($_GET['url']);

$pic1=$con->real_escape_string($_GET['pic1']);
$pic2=$con->real_escape_string($_GET['pic2']);
$pic3=$con->real_escape_string($_GET['pic3']);
$pic4=$con->real_escape_string($_GET['pic4']);
$pic5=$con->real_escape_string($_GET['pic5']);
$pic6=$con->real_escape_string($_GET['pic6']);
$pic7=$con->real_escape_string($_GET['pic7']);
$pic8=$con->real_escape_string($_GET['pic8']);
$pic9=$con->real_escape_string($_GET['pic9']);
$Nummp=$con->real_escape_string($_GET['numpic']);

$nameng=$con->real_escape_string($_GET['nam']);
$ageeng=$con->real_escape_string($_GET['age']);
$adrseng=$con->real_escape_string($_GET['adrs']);
$cityeng=$con->real_escape_string($_GET['city']);
$perjobeng=$con->real_escape_string($_GET['perjob']);
$relationeng=$con->real_escape_string($_GET['relation']);
$salleryeng=$con->real_escape_string($_GET['sallery']);
$fbeng=$con->real_escape_string($_GET['fb']);
$linkeng=$con->real_escape_string($_GET['link']);
$statworkeng=$con->real_escape_string($_GET['statwork']);
$numincoeng=$con->real_escape_string($_GET['numinco']);
$idnumeng=$con->real_escape_string($_GET['idnum']);

$namwr=$con->real_escape_string($_GET['namwr']);
$agewr=$con->real_escape_string($_GET['agewr']);
$adrswr=$con->real_escape_string($_GET['adrswr']);
$citywr=$con->real_escape_string($_GET['citywr']);
$perjobwr=$con->real_escape_string($_GET['perjobwr']);
$permerwr=$con->real_escape_string($_GET['permerwr']);
$pricwr=$con->real_escape_string($_GET['pricwr']);
$fbwr=$con->real_escape_string($_GET['fbwr']);
$linkwr=$con->real_escape_string($_GET['linkwr']);
$statworkwr=$con->real_escape_string($_GET['statworkwr']);
  
$all=$con->real_escape_string($_GET['alltext']);
$user=$con->real_escape_string($_GET['user']);
  
  
$numdata=$con->real_escape_string($_GET['numdata']);
$nammatrl=$con->real_escape_string($_GET['nammatrl']);
$codedata=$con->real_escape_string($_GET['codedata']);
$unitdata=$con->real_escape_string($_GET['unitdata']);

$cta=$con->real_escape_string($_GET['cta']);
$ctb=$con->real_escape_string($_GET['ctb']);
$ctc=$con->real_escape_string($_GET['ctc']);
$ctd=$con->real_escape_string($_GET['ctd']);
$cte=$con->real_escape_string($_GET['cte']);
$ctf=$con->real_escape_string($_GET['ctf']);
$ctg=$con->real_escape_string($_GET['ctg']);
$cth=$con->real_escape_string($_GET['cth']);
$cti=$con->real_escape_string($_GET['cti']);
$ctj=$con->real_escape_string($_GET['ctj']);
$ctk=$con->real_escape_string($_GET['ctk']);
$ctl=$con->real_escape_string($_GET['ctl']);
$ctm=$con->real_escape_string($_GET['ctm']);
$ctn=$con->real_escape_string($_GET['ctn']);
$cto=$con->real_escape_string($_GET['cto']);
$ctp=$con->real_escape_string($_GET['ctp']);
$ctq=$con->real_escape_string($_GET['ctq']);
$ctr=$con->real_escape_string($_GET['ctr']);
$cts=$con->real_escape_string($_GET['cts']);
$ctt=$con->real_escape_string($_GET['ctt']);
$ctu=$con->real_escape_string($_GET['ctu']);
$ctv=$con->real_escape_string($_GET['ctv']);
$ctw=$con->real_escape_string($_GET['ctw']);
$ctx=$con->real_escape_string($_GET['ctx']);
$cty=$con->real_escape_string($_GET['cty']);
$ctz=$con->real_escape_string($_GET['ctz']);
$ctaa=$con->real_escape_string($_GET['ctaa']);





//احصائيات
$country=$con->real_escape_string($_GET['country']);
$jobehs=$con->real_escape_string($_GET['jobehs']);	   
$workehs=$con->real_escape_string($_GET['workehs']);
$otherwork=$con->real_escape_string($_GET['otherwork']);
$facbe=$con->real_escape_string($_GET['facbe']);
$maceha=$con->real_escape_string($_GET['maceha']);



$readcountry=$con->real_escape_string($_GET['readcountry']);
$readjobehs=$con->real_escape_string($_GET['readjobehs']);	
// upload
        
if(!$action)
{
	echo "Please enter an action.";
}
else
{	
	if($action == "Accept")
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
		
		
		
		else if ($action =="checky")
	{
		
	   $query = $con->query("SELECT mac FROM yanasb WHERE mac = '$mac'");
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
		else if ($action =="yanasb")
	  {
	 
	   if($query = $con->query("INSERT INTO yanasb (code) VALUES ('$code')"))
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
		 
	   $querry = $con->query("SELECT code FROM yanasb WHERE code = '$code'");
		$cnt = $query->num_rows;
		
		if($cnt > 0)
		{
			$sql = "UPDATE `yanasb` SET `mac`='$mac', `date`='$date' WHERE `code`='$code'";

			$query = $con->query($sql);
			 
		
		}
		else
		{
			echo "stop";
		}
		
	}
		else if ($action =="read")
	{
		
	    $sqml = "SELECT * FROM yanasb WHERE mac=''";
$roms=$con->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
if($rw['mac'] == $mac) {
	
}
else
{	
   echo $rw['code'];
	echo '####';
}
}}
		
 
		
		 
		else
		{
			echo "0";
		}		
	}
	
	
	
	// اماكن مشروعات
	// عروض
	// تأجير معدات
	// الاشتراك الشهري
		else if ($action =="virsionlink")
	{
	    //DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM virsion";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
	 
echo  $rw['link'];
 
}}
		else
		{
			echo "0";
		}		
		
		
	}
	
		else if ($action =="reaudiopath")
	{
	    //DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM uploa";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
	 
echo  $rw['userPic'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
		
	}
		else if ($action =="reaudio")
	{
	    //DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM uploa";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
	 
echo  $rw['userName'].' :'.$rw['userProfession'].':'.$rw['userPic'].':'.$rw['date'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
		
	}
	else if ($action =="reemd")
	{
	    $query = $con1->query("SELECT * FROM emd ");
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
	else if ($action =="recompany")
	{
		 $query = $con1->query("SELECT * FROM company ");
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
	else if ($action =="reengineer")
	{
	    $query = $con1->query("SELECT * FROM engineer ");
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
	else if ($action =="reworker")
	{
	    $query = $con1->query("SELECT * FROM worker");
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
	else if ($action =="reproject")
	{
	    $query = $con1->query("SELECT * FROM project");
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
	else if ($action =="remokysah")
	{
	    $query = $con1->query("SELECT * FROM mokysah");
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
	
	else if ($action =="checkvirsion")
	{
	     $sqml = "SELECT * FROM virsion";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['num'];
}}
		else
		{
			echo "0";
		}			
		
	}
	
	
	else if ($action =="readchat")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM dardashah";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['user'].' :'.$rw['tim'].':'.$rw['alltext'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="readworker")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM worker";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['nam'].','.$rw['age'].','.$rw['adrs'].','.$rw['city'].','.$rw['perjob'].','.$rw['permer'].','.$rw['pric'].','.$rw['fb'].','.$rw['link'].','.$rw['statwork'].','.$rw['date'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="readeng")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM engineer";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['nam'].','.$rw['age'].','.$rw['adrs'].','.$rw['city'].','.$rw['perjob'].','.$rw['relation'].','.$rw['sallery'].','.$rw['fb'].','.$rw['link'].','.$rw['statwork'].','.$rw['numinco'].','.$rw['idnum'].','.$rw['date'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="readgallry")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM Gallry where Num='$Nummp'";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['pic1'].','.$rw['pic2'].','.$rw['pic3'].','.$rw['pic4'].','.$rw['pic5'].','.$rw['pic6'].','.$rw['pic7'].','.$rw['pic8'].','.$rw['pic9'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="jointotal")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM jo ";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['phonji'].','.$rw['mobji'].','.$rw['timrji'].','.$rw['macji'].','.$rw['facji'].','.$rw['namji'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="readmokysah")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM mokysah where num='$numm'";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['band'].','.$rw['amal'].','.$rw['unit'].','.$rw['amount'].','.$rw['total'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="readdata")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		//city,area,companies,address,phone,fax,email,url
		  $sqml = "SELECT * FROM data";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['city'].','.$rw['area'].','.$rw['companies'].','.$rw['address'].','.$rw['phone'].','.$rw['fax'].','.$rw['email'].','.$rw['url'];
echo "####";//"<br />\n";
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="readda")
	{

		  $sqml = "SELECT * FROM data";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
	
	   echo "\n";
       echo '    <table border="1" bordercolor="#808080" cellpadding="2">';
	   echo "\n";
       echo '        <tr>'; 
	   echo "\n";
       echo '            <th>city</th>' ;
	   echo "\n";
       echo '            <th>area</th>' ;
	   echo "\n";
       echo '            <th>companies</th>' ;
	   echo "\n";
       echo '            <th>address</th>' ;
	   echo "\n";
       echo '            <th>phone</th>' ;
	   echo "\n";
       echo '            <th>fax</th>' ;
	   echo "\n";
       echo '            <th>email</th>' ;
	   echo "\n";
       echo '            <th>url</th>' ;
	   echo "\n";
       echo '        </tr>';
while($rw=$roms->fetch_assoc()){
	echo '        <tr>';
	echo "\n";
    echo '            <td>'.$rw['city'].'</td>';
	echo "\n";
    echo '            <td>'.$rw['area'].'</td>';
	echo "\n";
    echo '            <td>'.$rw['companies'].'</td>';
	echo "\n";
	echo '            <td>'.$rw['address'].'</td>';
	echo "\n";
    echo '            <td />'.$rw['phone'].'</td>';
	echo "\n";
    echo '            <td />'.$rw['fax'].'</td>';
	echo "\n";
    echo '            <td>'.$rw['email'].'</td>';
	echo "\n";
    echo '            <td>'.$rw['url'].'</td>';
	echo "\n";
    echo '        </tr>';
	echo "\n";
 
 
}
 echo'    </table>';
	echo "\n";


}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="prototal")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM project ";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo $rw['nam'].','.$rw['date'].','.$rw['plac'].','.$rw['phon'].','.$rw['mob'].','.$rw['usr'].','.$rw['lag'].','.$rw['lth'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	else if ($action =="offtotal")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM offer ";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo $rw['nam'].','.$rw['plac'].','.$rw['offer'].','.$rw['price'].','.$rw['fax'].','.$rw['link'].','.$rw['mobof'].','.$rw['phonof'].','.$rw['facb'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	 else if ($action =="perdata")
	{
		//DB project >>>  num-nam-cunt-code-unit-ct1-ct2-ct3-ct4-ct5-ct6-ct7-ct8-ct9-ct10-ct11-ct12-ct13-ct14-ct15
		//DB project >>>  ct16-ct17-ct18-ct19-ct20-ct21-ct22-ct23-ct24-ct25-ct26-ct27
	 
	$sqml = "SELECT * FROM perdata ";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo  $rw['nammatrl'].','.$rw['unitdata'].','.$rw['codedata'].','.$rw['ctf'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
	}
	else if ($action =="coptotal")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM company where kind='$kind' ";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo $rw['nam'].','.$rw['phon'].','.$rw['mob'].','.$rw['adrs'].','.$rw['datl'].','.$rw['faxco'].','.$rw['prico'].','.$rw['city'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	 
	else if ($action =="rentotal")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
		  $sqml = "SELECT * FROM emd ";
$roms=$con1->query($sqml);
if($roms->num_rows>0){
while($rw=$roms->fetch_assoc()){
echo $rw['rent'].','.$rw['placre'].','.$rw['mach1'].','.$rw['mach2'].','.$rw['mach3'].','.$rw['mach4'].','.$rw['mach5'].','.$rw['mach6'].','.$rw['mach7'].','.$rw['mach8'].','.$rw['mach9'].','.$rw['mach10'].','.$rw['namre'].','.$rw['phonre'].','.$rw['mobre'].','.$rw['date'];
echo '####';
 
}}
		else
		{
			echo "0";
		}		
		
	}
	
	 
	else if ($action =="numver")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth
//$count=$dbo->prepare("update  pdo_admin set status='T' "); 
//$count=$dbo->prepare("delete from pdo_admin where status='F'");
//$count->execute();
//$no=$count->rowCount();
  $query = $con1->query("SELECT * FROM ni ");
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
	
	else if ($action =="insertdata")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr
 
		if($query = $con1->query("INSERT INTO data (city,area,companies,address,phone,fax,email,url) VALUES ('$city','$area','$companies','$address','$phone','$fax','$email','$url')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	
	 
	else if ($action =="insertproject")
	{
		//DB project >>>  num-nam-date-plac-phon-mob-usr-lag-lth   Y-m-d h:i:s A
	
		if($query = $con1->query("INSERT INTO project (num,nam,date,plac,phon,mob,usr,lag,lth) VALUES ('1','$nam','$date','$plac','$phon','$mob','$usr','$lag','$lth')"))
		
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertoffer")
	{
		//DB project >>>  nam-num-date-plac-offer-price
		
		if($query = $con1->query("INSERT INTO offer (nam,num,date,plac,offer,price,fax,link,phonof,mobof,facb) VALUES ('$namof','','$date','$placof','$offer','$prof','$fax','$link','$phonof','$mobof','$facb')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertrent")
	{ 
         
		//DB project >>>  num-rent-date-plac-mach1-mach2-mach3-mach4-mach5-mach6-mach7-mach8-mach9-mach10-mach11-mach12
		//DB project >>>  pric1-pric2-pric3-pric4-pric5-pric6-pric7-pric8-pric9-pric10-pric11-pric12

		 if($query = $con1->query("INSERT INTO emd (num,rent,date,placre,mach1,namre,phonre,mobre,mach2,mach3,mach4,mach5,mach6,mach7,mach8,mach9,mach10) VALUES ('1','$rent','$date','$placre','$mach1','$namre','$phonre','$mobre','$mach2','$mach3','$mach4','$mach5','$mach6','$mach7','$mach8','$mach9','$mach10')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertjoin")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
	
		//if($query = $con1->query("INSERT INTO nj (num,phonji,mobji,date,timrji,macji,facji,namji) VALUES ('1','$phonji','$mobji','1','$timrji','$macji','$facji','$namji')"))

	if($query = $con1->query("INSERT INTO jo (num,phonji,mobji,date,timrji,macji,facji,namji) VALUES ('1','$phonji','$mobji','1','$timrji','$macji','$facji','$namji')"))
		
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertcompany")
	{
		//DB project >>>  num-phon-mob-date-timr-mac

		if($query = $con1->query("INSERT INTO company (num,nam,phon,mob,date,timr,mac,adrs,datl,faxco,prico,kind,city) VALUES ('1','$namco','$phonco','$mobco','$date','$timr','$mac','$adrs','$datl','$faxco','$prico','$kind','$city')"))
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertveiwer")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
 //$query = $con1->exec("DELETE FROM viewer WHERE mac = '$macch'");

		//if($quey = $con1->query("INSERT INTO viewer (mac,on,off) VALUES ('1','1','1')"))
	$query = $con1->query("SELECT mac FROM ni WHERE mac = '$macvr'");
		$cnt = $query->num_rows;
	 
		if($cnt > 0)
		{
			echo "1";
		}
		else
		{
			$query = $con1->query("INSERT INTO ni (num,mac,onuser,offuser) VALUES ('$date','$macvr','$onuser','$offuser')");
			echo "0";
		}
		
	}
	
	else if ($action =="removeiwer")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
 //$query = $con1->exec("DELETE FROM viewer WHERE mac = '$macch'");

		//if($quey = $con1->query("INSERT INTO viewer (mac,on,off) VALUES ('1','1','1')"))
	 $sql = "DELETE FROM ni WHERE mac = '$macvr'";
        $query = $con1->prepare($sql);

       


        try {
          $result = $query->execute();
        } catch(PDOException $e) {
          echo $e->getCode() . " - " . $e->getMessage();
        }
		
		
	}
	else if ($action =="insertmokysah")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
 //$query = $con1->exec("DELETE FROM viewer WHERE mac = '$macch'");

		//if($quey = $con1->query("INSERT INTO viewer (mac,on,off) VALUES ('1','1','1')"))
	$query = $con1->query("SELECT macji FROM jo WHERE macji = '$macji'");
		$cnt = $query->num_rows;
 
		if($cnt > 0)
		{
			$query = $con1->query("INSERT INTO mokysah (num,amal,unit,amount,total,band) VALUES ('$numm','$amal','$unit','$amount','$total','$band')");
			
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertgallry")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
 //$query = $con1->exec("DELETE FROM viewer WHERE mac = '$macch'");

		//if($quey = $con1->query("INSERT INTO viewer (mac,on,off) VALUES ('1','1','1')"))
	$query = $con1->query("SELECT macji FROM jo WHERE macji = '$macji'");
		$cnt = $query->num_rows;
 
		if($cnt > 0)
		{
			$query = $con1->query("INSERT INTO Gallry (Num,mac,pic1,pic2,pic3,pic4,pic5,pic6,pic7,pic8,pic9) VALUES ('$Nummp','$macji','$pic1','$pic2','$pic3','$pic4','$pic5','$pic6','$pic7','$pic8','$pic9')");
			
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertengineer")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
 //$query = $con1->exec("DELETE FROM viewer WHERE mac = '$macch'");

		//if($quey = $con1->query("INSERT INTO viewer (mac,on,off) VALUES ('1','1','1')"))
	$query = $con1->query("SELECT macji FROM jo WHERE macji = '$macji'");
		$cnt = $query->num_rows;
		 
		if($cnt > 0)
		{
			$query = $con1->query("INSERT INTO engineer (nam,age,adrs,city,perjob,relation,sallery,fb,link,statwork,numinco,idnum,date) VALUES ('$nameng','$ageeng','$adrseng','$cityeng','$perjobeng','$relationeng','$salleryeng','$fbeng','$linkeng','$statworkeng','$numincoeng','$idnumeng','$date')");
			
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertworker")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
 //$query = $con1->exec("DELETE FROM viewer WHERE mac = '$macch'");

		//if($quey = $con1->query("INSERT INTO viewer (mac,on,off) VALUES ('1','1','1')"))
	    $query = $con1->query("SELECT macji FROM jo WHERE macji = '$macji'");
		$cnt = $query->num_rows;
		 
		if($cnt > 0)
		{
			$query = $con1->query("INSERT INTO worker (nam,age,adrs,city,perjob,permer,pric,fb,link,statwork,date) VALUES ('$namwr','$agewr','$adrswr','$citywr','$perjobwr','$permerwr','$pricwr','$fbwr','$linkwr','$statworkwr','$date')");
			
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	else if ($action =="insertchat")
	{
		//DB project >>>  num-phon-mob-date-timr-mac
 //$query = $con1->exec("DELETE FROM viewer WHERE mac = '$macch'");

		//if($quey = $con1->query("INSERT INTO viewer (mac,on,off) VALUES ('1','1','1')"))
	$query = $con1->query("SELECT macji FROM jo WHERE macji = '$macji'");
		$cnt = $query->num_rows;
			 
		 $date = date("g:i a  T Y");
		//setlocale(LC_TIME, "C");
		//$date = strftime("%A");
		if($query = $con1->query("INSERT INTO dardashah (tim,user,alltext,num) VALUES ('$date','$user','$all','$user')"))
		{
			 
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	 else if ($action =="inserdata")
	{ 
		//DB project >>>  num-nam-cunt-code-unit-ct1-ct2-ct3-ct4-ct5-ct6-ct7-ct8-ct9-ct10-ct11-ct12-ct13-ct14-ct15
		//DB project >>>  ct16-ct17-ct18-ct19-ct20-ct21-ct22-ct23-ct24-ct25-ct26-ct27
 //
 
       if($query = $con1->query("INSERT INTO perdata (numdata,nammatrl,codedata,unitdata,cta,ctb,ctc,ctd,cte,ctf,ctg,cth,cti,ctj,ctk,ctl,ctm,ctn,cto,ctp,ctq,ctr,cts,ctt,ctu,ctv,ctw,ctx,cty,ctz,ctaa) VALUES ('1','$nammatrl','1','$unitdata','$cta','$ctb','$ctc','$ctd','$cte','$ctf','$ctg','$cth','$cti','$ctj','$ctk','$ctl','$ctm','$ctn','$cto','$ctp','$ctq','$ctr','$cts','$ctt','$ctu','$ctv','$ctw','$ctx','$cty','$ctz','$ctaa')"))
			{
		echo "1";
		}
		else
		{
			echo "0";
		}
	}
    else if($action =="upload")
	{
			 
		 
		$username = $con->real_escape_string($_GET['username']);// user name
		$userjob = $con->real_escape_string($_GET['userjob']);// user email
       
	    $file =  pathinfo($_FILES["file"]["name"]);
         
		//$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
		 
			 
			 // valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif' ,'html','php','css','dwg','txt','wav'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$file['extension'];
				
			// move_uploaded_file($_FILES["file"]["tmp_name"], "aduio/" . $_FILES["file"]["name"]);
                move_uploaded_file($_FILES["file"]["tmp_name"], "aduio/" .$userpic);
    
    if($query = $con1->query("INSERT INTO uploa (userName,userProfession,userPic,date) VALUES ('$username','$userjob','$userpic','$date')"))
		{
			 
			echo "1";
		}
		else
		{
			echo "0";
		}
		}
		
		
	
 
	else if ($action =="checkehsyat")
	{
		
	   $query = $con1->query("SELECT country,maceha FROM ehsayat WHERE  maceha = '$maceha'");
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
	else if ($action =="reehsayatall")
	{
	     
			$query1 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='EL' and work='work'");
	    	$cont = $query1->num_rows;
			$query2 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='Na' and work='work'");
	    	$cont2 = $query2->num_rows;
			$query3 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='Ha' and work='work'");
	    	$cont3 = $query3->num_rows;
			$query4 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='com' and work='work'");
	    	$cont4 = $query4->num_rows;
			$query5 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='tra' and work='work'");
	    	$cont5 = $query5->num_rows;
			$query6 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='cher' and work='work'");
	    	$cont6 = $query6->num_rows;
			$query7 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='dri' and work='work'");
	    	$cont7 = $query7->num_rows;
			$query8 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='fac' and work='work'");
	    	$cont8 = $query8->num_rows;
			$query9 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='flor' and work='work'");
	    	$cont9 = $query9->num_rows;
			$query10 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='teac' and work='work'");
	    	$cont10 = $query10->num_rows;
			$query11 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='rubb' and work='work'");
	    	$cont11 = $query11->num_rows;
			$query12 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='maik' and work='work'");
	    	$cont12 = $query12->num_rows;
			$query13 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='acco' and work='work'");
	    	$cont13 = $query13->num_rows;
			$query14 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='doc' and work='work'");
	    	$cont14 = $query14->num_rows;
			$query15 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='carb' and work='work'");
	    	$cont15 = $query15->num_rows;
			$query16 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='mhar' and work='work'");
	    	$cont16 = $query16->num_rows;
			$query17 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='sabak' and work='work'");
	    	$cont17 = $query17->num_rows;
			$query18 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='engin' and work='work'");
	    	$cont18 = $query18->num_rows;
			$query19 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='lawer' and work='work'");
	    	$cont19 = $query19->num_rows;
			$query20 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='mach' and work='work'");
	    	$cont20 = $query20->num_rows;
			$query21 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='mablat' and work='work'");
	    	$cont21 = $query21->num_rows;
			$query22 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='sells' and work='work'");
	    	$cont22 = $query22->num_rows;
			$query23 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='builder' and work='work'");
	    	$cont23 = $query23->num_rows;
			$query24 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='arch' and work='work'");
	    	$cont24 = $query24->num_rows;
			$query25 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='progra' and work='work'");
	    	$cont25 = $query25->num_rows;
			 $query26 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='perss' and work='work'");
	    	$cont26 = $query26->num_rows;
			
			
			$query01 = $con1->query("SELECT country,job FROM ehsayat where country='E'");
	    	$cont0 = $query01->num_rows;
			$query02 = $con1->query("SELECT country,job FROM ehsayat where country='s'");
	    	$cont02 = $query02->num_rows;
			$query03 = $con1->query("SELECT country,job FROM ehsayat where country='L'");
	    	$cont03 = $query03->num_rows;
			$query04 = $con1->query("SELECT country,job FROM ehsayat where country='m'");
	    	$cont04 = $query04->num_rows;
			$query05 = $con1->query("SELECT country,job FROM ehsayat where country='J'");
	    	$cont05 = $query05->num_rows;
			$query06 = $con1->query("SELECT country,job FROM ehsayat where country='Q'");
	    	$cont06 = $query06->num_rows;
			$query07 = $con1->query("SELECT country,job FROM ehsayat where country='sm'");
	    	$cont07 = $query07->num_rows;
			$query08 = $con1->query("SELECT country,job FROM ehsayat where country='o'");
	    	$cont08 = $query08->num_rows;
			$query09 = $con1->query("SELECT country,job FROM ehsayat where country='p'");
	    	$cont09 = $query09->num_rows;
			$query010 = $con1->query("SELECT country,job FROM ehsayat where country='r'");
	    	$cont010 = $query010->num_rows;
			$query011 = $con1->query("SELECT country,job FROM ehsayat where country='Ln'");
	    	$cont011 = $query011->num_rows;
			$query012 = $con1->query("SELECT country,job FROM ehsayat where country='sr'");
	    	$cont012 = $query012->num_rows;
			$query013 = $con1->query("SELECT country,job FROM ehsayat where country='T'");
	    	$cont013 = $query013->num_rows;
			$query014 = $con1->query("SELECT country,job FROM ehsayat where country='So'");
	    	$cont014 = $query014->num_rows;
			$query015 = $con1->query("SELECT country,job FROM ehsayat where country='mr'");
	    	$cont015 = $query015->num_rows;
			$query016 = $con1->query("SELECT country,job FROM ehsayat where country='a'");
	    	$cont016 = $query016->num_rows;
			$query017 = $con1->query("SELECT country,job FROM ehsayat where country='y'");
	    	$cont017 = $query017->num_rows;
			$query018 = $con1->query("SELECT country,job FROM ehsayat where country='k'");
	    	$cont018 = $query018->num_rows;
			$query019 = $con1->query("SELECT country,job FROM ehsayat where country='g'");
	    	$cont019 = $query019->num_rows;
			$query020 = $con1->query("SELECT country,job FROM ehsayat where country='gr'");
	    	$cont020 = $query020->num_rows;
			$query021 = $con1->query("SELECT country,job FROM ehsayat where country='em'");
	    	$cont021 = $query021->num_rows;
			$query022 = $con1->query("SELECT country,job FROM ehsayat where country='b'");
	    	$cont022 = $query022->num_rows;
			
			$query001 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='EL' and work='notwork'");
	    	$cont00 = $query001->num_rows;
			$query002 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='Na' and work='notwork'");
	    	$cont002 = $query002->num_rows;
			$query003 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='Ha' and work='notwork'");
	    	$cont003 = $query003->num_rows;
			$query004 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='com' and work='notwork'");
	    	$cont004 = $query004->num_rows;
			$query005 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='tra' and work='notwork'");
	    	$cont005 = $query005->num_rows;
			$query006 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='cher' and work='notwork'");
	    	$cont006 = $query006->num_rows;
			$query007 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='dri' and work='notwork'");
	    	$cont007 = $query007->num_rows;
			$query008 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='fac' and work='notwork'");
	    	$cont008 = $query008->num_rows;
			$query009 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='flor' and work='notwork'");
	    	$cont009 = $query009->num_rows;
			$query0010 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='teac' and work='notwork'");
	    	$cont0010 = $query0010->num_rows;
			$query0011 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='rubb' and work='notwork'");
	    	$cont0011 = $query0011->num_rows;
			$query0012 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='maik' and work='notwork'");
	    	$cont0012 = $query0012->num_rows;
			$query0013 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='acco' and work='notwork'");
	    	$cont0013 = $query0013->num_rows;
			$query0014 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='doc' and work='notwork'");
	    	$cont0014 = $query0014->num_rows;
			$query0015 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='carb' and work='notwork'");
	    	$cont0015 = $query0015->num_rows;
			$query0016 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='mhar' and work='notwork'");
	    	$cont0016 = $query0016->num_rows;
			$query0017 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='sabak' and work='notwork'");
	    	$cont0017 = $query0017->num_rows;
			$query0018 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='engin' and work='notwork'");
	    	$cont0018 = $query0018->num_rows;
			$query0019 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='lawer' and work='notwork'");
	    	$cont0019 = $query0019->num_rows;
			$query0020 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='mach' and work='notwork'");
	    	$cont0020 = $query0020->num_rows;
			$query0021 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='mablat' and work='notwork'");
	    	$cont0021 = $query0021->num_rows;
			$query0022 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='sells' and work='notwork'");
	    	$cont0022 = $query0022->num_rows;
			$query0023 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='builder' and work='notwork'");
	    	$cont0023 = $query0023->num_rows;
			$query0024 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='arch' and work='notwork'");
	    	$cont0024 = $query0024->num_rows;
			$query0025 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='progra' and work='notwork'");
	    	$cont0025 = $query0025->num_rows;
			$query0026 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='perss' and work='notwork'");
	    	$cont0026 = $query0026->num_rows;
	         
			 $query0027 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='other' and work='work'");
	    	$cont0027 = $query0027->num_rows;
			$query0028 = $con1->query("SELECT country,job FROM ehsayat where country='$readcountry' and job='other' and work='notwork'");
	    	$cont0028 = $query0028->num_rows;
			 if($cont00 >= 0)
			 {
		        	echo $cont.','.$cont2.','.$cont3.','.$cont4.','.$cont5.','.$cont6.','.$cont7.','.$cont8.','.$cont9.','.$cont10.','.$cont11.','.$cont12.','.$cont13.','.$cont14.','.$cont15.','.$cont16.','.$cont17.','.$cont18.','.$cont19.','.$cont20.','.$cont21.','.$cont22.','.$cont23.','.$cont24.','.$cont25.','.$cont26.','.$cont0.','.$cont02.','.$cont03.','.$cont04.','.$cont05.','.$cont06.','.$cont07.','.$cont08.','.$cont09.','.$cont010.','.$cont011.','.$cont012.','.$cont013.','.$cont014.','.$cont015.','.$cont016.','.$cont017.','.$cont018.','.$cont019.','.$cont020.','.$cont021.','.$cont022.','.$cont00.','.$cont002.','.$cont003.','.$cont004.','.$cont005.','.$cont006.','.$cont007.','.$cont008.','.$cont009.','.$cont0010.','.$cont0011.','.$cont0012.','.$cont0013.','.$cont0014.','.$cont0015.','.$cont0016.','.$cont0017.','.$cont0018.','.$cont0019.','.$cont0020.','.$cont0021.','.$cont0022.','.$cont0023.','.$cont0024.','.$cont0025.','.$cont0026.','.$cont0027.','.$cont0028;
			 }
			 else 
			 {
				 echo "0";
			 }
		         
		
	}	
	 
	 else if ($action =="ehsayat")
	{ 
		
	   if($query = $con1->query("INSERT INTO ehsayat (country,job,date,work,otherwork,facbe,maceha) VALUES ('$country','$jobehs','$date','$workehs','$otherwork','$facbe','$maceha')"))
			{
		echo "1";
		}
		else
		{
			echo "0";
		}
	}
   
	else
	{
		echo "Invalid action.";
	}
}

?>