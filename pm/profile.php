<!DOCTYPE html>
<!-- saved from url=(0050)https://colorlib.com/polygon/gentelella/index.html -->
<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	include('config.php');
	
	if( !isset($_SESSION['user']) ) {
		$form=false;
		

	}else{
		$form=true;
		
	
		// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
		while($row = mysql_fetch_assoc($res)) { 
  $user_name = $row['userName'];
  $profile_link = "http://ebank.esy.es/pm/" . $row['userId'];
  echo "<a href='" . $profile_link . "' >" . $user_name . "</a>";
  }
	//عدد الاعضاء$totusers
	//رصيد البنك$totbalance
	//عدد المشروعات$project
	//عدد الوظائف$jobs
	//رصيدك$balance
	//أرباحك$benfit
	$add=mysql_query('SELECT count(userId),SUM(Balance),Balance from `users`');
while($row=mysql_fetch_array($add))
{
	$totusers=$row['count(userId)'];
	$totbalance=$row['SUM(Balance)'];
	$balance=$row['Balance'];
	
	}
	
	


?>
  <?php 
  $table=mysql_query('SELECT * FROM `add`');
  while($row1=mysql_fetch_array($table))
  {
	  $project=$row1['project'];
	  $jobs=$row1['jobs'];
	  $benfit=$row1['benfit'];
	 
	  
  ?>
 
  <?php } } ?>
    <!-- Meta, title, CSS, favicons, etc. -->
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>البنك الالكترونى المصري|e-ebank </title>

    <!-- Bootstrap -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/jquery-jvectormap-2.0.3.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/custom.min.css" rel="stylesheet">
		<!--<script>
		if (window.location.href.indexOf("profile.php/1") != 0) {
window.location.href = "http://www.scopnn.blogspot.com/p/simple-flate.html";
}
		
		</script>
		<!-- snip 
<div id="dom-target" style="display: none;">
   // < ?php 
      //  $output = "42"; //Again, do some operation, get the output.
      //  echo htmlspecialchars($output); /* You have to escape because the result
                                           will not be valid HTML otherwise. */
   // ?>
</div>
<script>
    var div = document.getElementById("dom-target");
    var myData = div.textContent;
</script>
<!-- snip -->
		
		<script>
	(function() {
    var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'shortcut icon';
    link.href = 'http://www.ebank.esy.es/login/m.ico';
    document.getElementsByTagName('head')[0].appendChild(link);
}());
	</script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=85b614c0f6/cloudflare.min.js"></script>
  </head>
<link rel="stylesheet" href="../login/style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
   
 		<?php   
		$_GET['id'] = 6;
       include('../login/visitor.php');
	   ?> 
 
  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
<?php 
if($form)
{
 ?>
  <?php include('../login/Sidemenu.php'); ?>
         <!-- top navigation -->
         <?php include('../login/topmenu.php');?>
         <!-- /top navigation -->
<?php  
 function convertArabicNumbers($arabic) {
    $trans = array(
        "٠" => "0",
        "١" => "1",
        "٢" => "2",
        "٣" => "3",
        "٤" => "4",
        "٥" => "5",
        "٦" => "6",
        "٧" => "7",
        "٨" => "8",
        "٩" => "9",
    );
  

  return strtr($arabic, $trans);
   
}	 
 
$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');

//$totusers = str_replace($western_arabic, $eastern_arabic, $totusers);
?>

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1732px;height: 1300px;">          <!-- top tiles -->
           <?php include('../login/stripuser.php'); ?>
		    <script>

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
          <!-- /top tiles -->
<?php  } ?>
<?php

//We add a link to send a pm to the user
if(isset($_SESSION['user']))
{ }else{?>
<style>

body {
	height:100%;
	width:100%;
	margin:0;padding:0;
	
}

	.container {
		width:900px;
		height:100%;
		top:0%;
		margin:0 auto;
		background-color:#25545a;
		position:relative;
	}


</style>
<style>
div#myDiv {
    -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(60deg); /* Safari */
    transform: rotate(180deg); /* Standard syntax */
}
</style>


<?php } ?>




<div class="x_content">

<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
       overflow: hidden;
    border: 1px solid rgba(50, 72, 93, 0.71);
    background-color: rgba(30, 43, 55, 0.69);
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: none;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #1b2c3c;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #0d151d;
}

/* Style the tab content */
.tabcontent {
   display: none;
    padding: 10px 12px;
    border: 1px solid #233343;
    border-top: none;
    height:600px;
}
</style>
 
<?php

//We check if the users ID is defined
//if(isset($_GET['id']))
if(isset($_GET["userName"]))
{
	
	$id = intval($_GET['id']);
	$nm = $_GET["userName"];
	//We check if the user exists
	$dn = mysql_query('select * from users where userName="'.$nm.'"');
	if(mysql_num_rows($dn)>0)
	{
		$dnn = mysql_fetch_array($dn);
		//We display the user datas
		 
					 

?>

<table style="width:500px;">
	<tr>
    	<td><?php
		
if($dnn['userpic']!='')
{
	
?>
</table>

		</div>
                  <div class="bs-example" data-example-id="simple-jumbotron" dir="rtl">
                    <div class="jumbotron">
                      <table style="width:40%;">
	<tbody><tr>
    	<td><?php echo '<img src="'.htmlentities($dnn['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:200px;max-height:200px;border-radius: 6%;" />'; ?></td>
    	<?php
		}
else
{
	echo 'This user dont have an avatar.';
}
?>
		<td class="left"><h1><?php echo htmlentities($dnn['userName'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	<?php echo htmlentities($dnn['userEmail'], ENT_QUOTES, 'UTF-8'); ?><br>
        لقد انضم الينا منذ <?php echo htmlentities($dnn['date_sign'], ENT_QUOTES, 'UTF-8'); ?><br>
		 ebank.esy.es/<?php echo  htmlentities($dnn['userName'], ENT_QUOTES, 'UTF-8'); ?>صفحته 
		</td>
		
		
    </tr>
</tbody></table>
<!-- script without reload page #########################################-->

<script type="text/javascript">
    $(document).ready(function(){
      refreshTable();
    });
 
    function refreshTable(){
        $('#tableHolder').load('refresh.php', function(){
           setTimeout(refreshTable, 1000);
        });
    }
	
</script>
 <!-- script without reload page #########################################-->
<?php

//We add a link to send a pm to the user
if(isset($_SESSION['user']))
{ ?>
 <p id="tableHolder"></p>

<?php }else{ echo $dnn['coment']; }?>
<div class="bs-example-popovers">
<?php
$uss=$_SESSION['user'];

 if($dnn['userName']==$userRow['userName'])
{ 

} else { 

$us1=$userRow['userId'];
					$us2=$dnn['userId'];

//check 
$bhh=mysql_query('SELECT * FROM follow WHERE id1="'.$userRow['userId'].'" and id2="'.$dnn['userId'].'"');
			$rnj=mysql_fetch_array($bhh);
			 // if uname/pass correct it returns must be 1 row
		$ddd="   ";
           if($rnj ) {
				 
				$ddd="الغاء المتابعة";
			} else {
				
				$ddd="متابعة";
	if(isset($_POST['follo']))
		{
		 // setup query
if($result=$conn->query("INSERT INTO follow (`id1`, `id2`, `follow`, `unfollow`) VALUES ('$us1', '$us1',1,1)"))
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:1;profile.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}		
			}
			
?>


	<?php } ?>  

 
					  <?php
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "&#1578;&#1605; &#1575;&#1604;&#1578;&#1587;&#1580;&#1610;&#1604; &#1576;&#1606;&#1580;&#1575;&#1581; &#1610;&#1605;&#1603;&#1606;&#1603; &#1575;&#1604;&#1583;&#1582;&#1608;&#1604; &#1575;&#1604;&#1575;&#1606;";
				//unset($name);
				//unset($email);
				//unset($pass);
                            //    unset($userage);
                             //   unset($cardnum);
                              //  unset($perid);
			} else {
				$errTyp = "danger";
				$errMSG = "&#1581;&#1583;&#1579; &#1582;&#1591;&#1571; &#1605;&#1575; ,&#1575;&#1593;&#1583; &#1575;&#1604;&#1605;&#1581;&#1575;&#1608;&#1604;&#1577; &#1605;&#1585;&#1577; &#1575;&#1582;&#1585;&#1609;";	
			}
	?>
	<!--00000000000000000000000000000000000000000000000000000000000000000000000-->
				  <?php				
//We add a link to send a pm to the user
if(isset($_SESSION['user']))
{
			
					
					
//0	Pending					
//1	Accepted
//2	Declined
//3	Blocked

 $nnnnn==$userRow['userName'];
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 if($dnn['userName']==$userRow['userName'])
{ 
	 
	

?>
	 
<form method="post" id="idform" >
	  	
		<button   type="submit"  id="btnupd"  name="btnupd" class="btn btn-success btn-xs"  style="width:100px;height:80px;" >
		 <i class="fa fa-user">
         </i> <i class="fa fa-comments-o"></i>تحديث </button>
	
	<input id="upd" name="upd"  type="text" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 73%;height: 80px;left: 300px;border: 2px solid #2a3f54;"  value="" placeholder="ماذا يخطر ببالك اليوم">
</form>
	 
	<?php
} else { 


if (isset($_POST['charge'])) {
             	//We protect the variables
				$codn= trim($_POST['codn']);
		        $codn= strip_tags($codn);
		        $codn= htmlspecialchars($codn);
			  
			 //   update id1  update id2
			 //        +          -
			 //      record    record
			 //$balan1=$userRow['Balance']; // you send 
			// $balan2=$dnn['Balance'];     // he  recive
			 $input=$_POST['codn'];
			  //if id2 balance under input refuse
			  $balanss=$userRow['Balance'];
		//	  function phpAlert($msg) {
 //   echo '<script type="text/javascript">alert("' . $msg . '")</script>';
//}
			 if($balanss < $input){
				
			//	phpAlert( "Hello world!\\n\\nPHP has got an Alert Box"   );
			 

 $ssss="ليس لديك رصيد كافي";
				
             }else{
			 // if id1  send money to id2   say 100 L.E.
			 $ba1=$userRow['Balance'];
			 $ba2=$dnn['Balance'];
			 
			$moneybefore=$userRow['Balance'];
			
			$balan1=$ba1-$input; //where UserId=$usr1
			 $balan2=$ba2+$input; //where UserId=$usr2
			 // update
	//  mysql_query('update users set Balance="'.$balan.'" where userId="'.mysql_real_escape_string($userRow['userId']).'"');
		//	mysql_query('update users set Balance="'.$balan2.'" where userId="'.mysql_real_escape_string($dnn['userId']).'"');
				
  if ($result = $conn->query("UPDATE users SET Balance='".$balan1."' WHERE userId='".$userRow['userId']."'")) {
       	 $query0 = "UPDATE users SET Balance= Balance+'".$_POST['codn']."' WHERE userId='".$dnn['userId']."'"; 
         $query1 = "UPDATE users SET Balance= Balance-'".$_POST['codn']."' WHERE userId='".$userRow['userId']."'"; 
                $id01=$userRow['userId'];  $id02=$dnn['userId'];  
				$from=$userRow['userId'];      $to=$dnn['userId'];
				$date = date('Y-m-d h:i:s A');
			$moneyafter=$balan1; $code=0;
			$mony=$_POST['codn'];
			$cardrecive=$dnn['cardnum'];
		$query2 = "INSERT INTO seremon(id1,id2,fromid,toid,datetime,beforeid,afterid,codeconv,money,cardrecive) VALUES('$id01','$id02','$from','$to','$date','$moneybefore','$moneyafter','$code','$mony','$cardrecive')";

if(mysqli_query($conn, $query2)){
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
				   
		  $update = mysql_query($query0)or die(mysql_error());
			 $lk="http://ebank.esy.es/pm/profile.php?userName=";
	         $tg=$dnn['userName'];
	         $URL=$lk.$tg;
			//mysql_query('update users set Balance="'.$balan2.'" where userId="'.mysql_real_escape_string($dnn['userId']).'"');
			
             echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
             echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
			//  }
            } else {
    echo "Error updating record: " . $conn->error;
}
}
}

?>
<form method="post"  autocomplete="off">
	  	
<button type="button" id="follo" name="follo" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" >
                       <a href="#"> <?php echo $ddd ;?></a>
                      </button>
					
 <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
                        <a href="new_pm.php?recip=<?php echo urlencode($dnn['userName']); ?>" class="big">ارسل رسالة "<?php echo htmlentities($dnn['userName'], ENT_QUOTES, 'UTF-8'); ?>"</a>
						
                      </button>
	<style>
.modalDialog {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        opacity:0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
    }
    .modalDialog:target {
        opacity:1;
        pointer-events: auto;
    }
    .modalDialog > div {
		    height: 150px;
        width: 400px;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
    }
    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }
    .close:hover { background: #00d9ff; }
</style>
                      
					  <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                     <a href="#openModal1">تحويل رصيد له</a>

                      </button>
					  <div id="openModal1" class="modalDialog">
<div>
    <a href="#close" title="Close" class="close">X</a>
    <h2>تحويل الاموال</h2>
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
  					
                      </div>
					 <span><?php echo $ssss;  ?></span>
					 <input id="codn" type="text" name="codn"   onkeypress="validate(event)" required="required" placeholder="المبلغ المحول له" value="<?php if(isset($_POST['codn'])){echo htmlentities($_POST['codn'], ENT_QUOTES, 'UTF-8');} ?>">
 <button   id="charge" type="submit" class="btn btn-default"   name="charge" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                      تحويل رصيد"<?php echo htmlentities($dnn['userName'], ENT_QUOTES, 'UTF-8'); ?>"

                      </button>	 
					 <script>
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
					 
  </div>
</div>

					  <?php
					   
					// mysql_query("SELECT user1ac,user2ac FROM Ferinds WHERE user1='$us1',user2='$us2'");
					 // 
					// $dnmn = mysql_query('select * from Ferinds where user1="'.$userRow['userId'].'",user2="'.$dnn['userId'].'"');
	//if(mysql_num_rows($dnmn)>)
	//{
		//$result = mysql_fetch_array($dnmn);
		//We display the user datas
					
			
					   //0	Pending					
//1	Accepted
//2	Declined
//3	Blocked

			//	if($result['user1ac'] ==1 or $result['user2ac'] ==1 ){
				//	$arf="You are his firend";
				//}elseif($result['user1ac'] ==2 or $result['user2ac'] ==2  ){
			//		$arf= "Waiting for accept your add";
		//		}elseif($result['user1ac'] ==3 or $result['user2ac'] ==3  ){
		//			$arf="you have been blocked";
			//	}else{
		//		$arf="add fired";
		//	}
		//	mysql_query('update Ferinds set user1="'.$us1.'", user2="'.$us2.'", user1ac="1" where userId="'.mysql_real_escape_string($_SESSION['userId']).'"');
	//		}
	
					 
					  if (isset($_POST['addf'])) {//*//
             	
 $dn2 = mysql_num_rows(mysql_query('select * from users where userId="'.$us1.'"'));
			          $id = $dn2+1;
			          
					  $us1ac="1";
			          $query = "INSERT INTO Ferinds(user1,user2,user1ac) VALUES('$us1','$us2','$us1ac')";
			


}//*//
 if($dnn['userName']==$userRow['userName'])
{ 

} else { 

$us1=$userRow['userId'];
					$us2=$dnn['userId'];

//check 
$fr=mysql_query('SELECT * FROM Ferinds WHERE user1="'.$userRow['userId'].'" and user2="'.$dnn['userId'].'"');
			$ftfr=mysql_fetch_array($fr);
			 // if uname/pass correct it returns must be 1 row
			 $fr1=mysql_query('SELECT * FROM Ferinds WHERE user1="'.$dnn['userId'].'" and user2="'.$userRow['userId'].'"');
			$ftfr1=mysql_fetch_array($fr1);
		$tryy="   ";
           if($ftfr or $ftfr1 ) {
				 
				$tryy="الغاء الصداقة";
			} else {
				
				$tryy="اضافة الى الاصدقاء";
		     
			 }
			 
			 }
					  ?>
					  
                      <button id="addf" type="submit"  class="btn btn-default"   name="addf" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        
						 <a href="#"><?php echo $tryy;   ?> </a>
						
					 </button>
					 </form>
					  	<?php  } ?> 

                    </div>

</div>
                  </div>
				  <div class="x_content" style="display: block;height: 606px;">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                   <div class="tab">
				      <button class="tablinks" id="follow"onclick="openCity(event, 'prlin')">متابعات</button>
                      <button class="tablinks active" onclick="openCity(event, 'London')">يوميــات</button>
                      <button class="tablinks" onclick="openCity(event, 'Paris')">الملف الشخصي</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">الخدمات</button>
                      </div>
                      
<div id="London" class="tabcontent">
  <p><?php echo $dnn['coment']; ?></p>
<?php
$uss=$_SESSION['user'];

 if($dnn['userName']!==$userRow['userName'])
{ 

} else { 
if (isset($_POST['addwall'])) {
             	//We protect the variables
				$adrs= trim($_POST['wall']);
		        $adrs= strip_tags($adrs);
		        $adrs= htmlspecialchars($adrs);
		$usiid=$userRow['userId'];
		
$dn2 = mysql_num_rows(mysql_query('select idpost from wallp where id="'.$usiid.'"'));
			$idn = $dn2+1;
			
			$date = date('Y-m-d h:i:s A');
			$una=$userRow['userName'];
			$query = "INSERT INTO wallp(id,date,posst,idpost,nm) VALUES('$usiid','$date','$adrs','$idn','$una')";
			
	
	$sql = "INSERT INTO wallp (id,date,posst,idpost,nm) VALUES ('$usiid','$date','$adrs','$idn','$una')";
if(mysqli_query($conn, $sql)){
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
	
	
	} else {
   
}



?>
   <form method="post" id="addwall" name="addwall" action="" autocomplete="off">
	  		<input id="wall" name="wall"  type="text"  style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 73%;height: 80px;left: 300px;border: 2px solid #2a3f54;" onkeyup="convert()" value="<?php if(isset($_POST['upd'])){echo htmlentities($_POST['upd'], ENT_QUOTES, 'UTF-8');} ?>" placeholder="ماذا يخطر ببالك اليوم">

		<button   id="addwall" type="submit"class="btn btn-success btn-xs"   name="addwall" style="width:100px;height:30px;" >
		 <i class="fa fa-user">
         </i> <i class="fa fa-comments-o"></i>اضافة </button>
</form>
  
  <?php  } ?> 
   <?php 
						 	// select loggedin users detail
							$us=$_SESSION['user'];
							$uid=$userRow['userId'];

	

	 if($dnn['userName']!==$userRow['userName'])
{ 
$rf=mysql_query('SELECT * FROM wallp WHERE id="'.$dnn['userId'].'" ORDER BY date DESC ');//'SELECT * FROM wallp WHERE id="'.$dnn['userId'].'" ORDER BY idpost DESC LIMIT 30'
while($userfr=mysql_fetch_array($rf))
{
	?>
	 
              <div class="x_panel">
                <div class="x_content">
				
                  <ul class="list-unstyled msg_list">
                    <li>
                      <a>
                        <span class="image">
                       <?php echo '<img src="'.htmlentities($dnn['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:200px;max-height:200px;" />'; ?>
    	                </span>
                        <span>
                          <span><?php echo urlencode($dnn['userName']); ?></span>
                          <span class="time"><?php  echo $userfr['date']; ?></span>
                        </span>
                        <span class="message">
                          <?php  echo $userfr['posst']; ?>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
             
	
	
	<?php
} }
else 
{ 
$rf=mysql_query('SELECT * FROM wallp WHERE id="'.$uid.'" ORDER BY date DESC ');//'SELECT * FROM wallp WHERE id="'.$uid.'" ORDER BY idpost DESC LIMIT 10'<<
while($userfr=mysql_fetch_array($rf)){
  ?>

              <div class="x_panel">
                <div class="x_content">
				<div class="row preview-html" ng-show="screen == 'preview'" ng-hide="loading">
        <div class="col-md-12"><div id="cssmenu"><div id="menu-button">Menu</div>
  <ul>
     <li class="has-sub"><span class="submenu-button"></span><a href="#"><i class="fa fa-fw fa-bars"></i> Menus</a>
        <ul>
           <li class="has-sub"><span class="submenu-button"></span><a href="#">Option</a>
              <ul>
                 <li><a href="#">Delete</a></li>
              </ul>
           </li>
        </ul>
     </li>
     
  </ul>
</div></div>
      </div>
 
<style type="text/css" class="ng-binding ng-scope">@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
  font-family: Montserrat, sans-serif;
  background: #182735;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 17px;
  font-size: 12px;
  letter-spacing: 1px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 700;
  text-transform: uppercase;
}
#cssmenu > ul > li:hover > a {
  color: #ffffff;
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 30px;
}
#cssmenu > ul > li.has-sub > a:after {
  position: absolute;
  top: 22px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu > ul > li.has-sub > a:before {
  position: absolute;
  top: 19px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu > ul > li.has-sub:hover > a:before {
  top: 23px;
  height: 0;
}
#cssmenu ul ul {
  position: absolute;
  left: -9999px;
}
#cssmenu.align-right ul ul {
  text-align: right;
}
#cssmenu ul ul li {
  height: 0;
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu li:hover > ul {
  left: auto;
}
#cssmenu.align-right li:hover > ul {
  left: auto;
  right: 0;
}
#cssmenu li:hover > ul > li {
  height: 35px;
}
#cssmenu ul ul ul {
  margin-left: 100%;
  top: 0;
}
#cssmenu.align-right ul ul ul {
  margin-left: 0;
  margin-right: 100%;
}
#cssmenu ul ul li a {
  border-bottom: 1px solid rgba(150, 150, 150, 0.15);
  padding: 11px 15px;
  width: 170px;
  font-size: 12px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 400;
  background: #182735;
}
#cssmenu ul ul li:last-child > a,
#cssmenu ul ul li.last-item > a {
  border-bottom: 0;
}
#cssmenu ul ul li:hover > a,
#cssmenu ul ul li a:hover {
  color: #ffffff;
}
#cssmenu ul ul li.has-sub > a:after {
  position: absolute;
  top: 16px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu.align-right ul ul li.has-sub > a:after {
  right: auto;
  left: 11px;
}
#cssmenu ul ul li.has-sub > a:before {
  position: absolute;
  top: 13px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu.align-right ul ul li.has-sub > a:before {
  right: auto;
  left: 14px;
}
#cssmenu ul ul > li.has-sub:hover > a:before {
  top: 17px;
  height: 0;
}
#cssmenu.small-screen {
  width: 100%;
}
#cssmenu.small-screen ul {
  width: 100%;
  display: none;
}
#cssmenu.small-screen.align-center > ul {
  text-align: left;
}
#cssmenu.small-screen ul li {
  width: 100%;
  border-top: 1px solid rgba(120, 120, 120, 0.2);
}
#cssmenu.small-screen ul ul li,
#cssmenu.small-screen li:hover > ul > li {
  height: auto;
}
#cssmenu.small-screen ul li a,
#cssmenu.small-screen ul ul li a {
  width: 100%;
  border-bottom: 0;
}
#cssmenu.small-screen > ul > li {
  float: none;
}
#cssmenu.small-screen ul ul li a {
  padding-left: 25px;
}
#cssmenu.small-screen ul ul ul li a {
  padding-left: 35px;
}
#cssmenu.small-screen ul ul li a {
  color: #dddddd;
  background: none;
}
#cssmenu.small-screen ul ul li:hover > a,
#cssmenu.small-screen ul ul li.active > a {
  color: #ffffff;
}
#cssmenu.small-screen ul ul,
#cssmenu.small-screen ul ul ul,
#cssmenu.small-screen.align-right ul ul {
  position: relative;
  left: 0;
  width: 100%;
  margin: 0;
  text-align: left;
}
#cssmenu.small-screen > ul > li.has-sub > a:after,
#cssmenu.small-screen > ul > li.has-sub > a:before,
#cssmenu.small-screen ul ul > li.has-sub > a:after,
#cssmenu.small-screen ul ul > li.has-sub > a:before {
  display: none;
}
#cssmenu.small-screen #menu-button {
  display: block;
  padding: 17px;
  color: #dddddd;
  cursor: pointer;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
}
#cssmenu.small-screen #menu-button:after {
  position: absolute;
  top: 22px;
  right: 17px;
  display: block;
  height: 4px;
  width: 20px;
  border-top: 2px solid #dddddd;
  border-bottom: 2px solid #dddddd;
  content: '';
  box-sizing: content-box;
}
#cssmenu.small-screen #menu-button:before {
  position: absolute;
  top: 16px;
  right: 17px;
  display: block;
  height: 2px;
  width: 20px;
  background: #dddddd;
  content: '';
  box-sizing: content-box;
}
#cssmenu.small-screen #menu-button.menu-opened:after {
  top: 23px;
  border: 0;
  height: 2px;
  width: 15px;
  background: #ffffff;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
#cssmenu.small-screen #menu-button.menu-opened:before {
  top: 23px;
  background: #ffffff;
  width: 15px;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
#cssmenu.small-screen .submenu-button {
  position: absolute;
  z-index: 99;
  right: 0;
  top: 0;
  display: block;
  border-left: 1px solid rgba(120, 120, 120, 0.2);
  height: 46px;
  width: 46px;
  cursor: pointer;
}
#cssmenu.small-screen .submenu-button.submenu-opened {
  background: #262626;
}
#cssmenu.small-screen ul ul .submenu-button {
  height: 34px;
  width: 34px;
}
#cssmenu.small-screen .submenu-button:after {
  position: absolute;
  top: 22px;
  right: 19px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu.small-screen ul ul .submenu-button:after {
  top: 15px;
  right: 13px;
}
#cssmenu.small-screen .submenu-button.submenu-opened:after {
  background: #ffffff;
}
#cssmenu.small-screen .submenu-button:before {
  position: absolute;
  top: 19px;
  right: 22px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
}
#cssmenu.small-screen ul ul .submenu-button:before {
  top: 12px;
  right: 16px;
}
#cssmenu.small-screen .submenu-button.submenu-opened:before {
  display: none;
}
#cssmenu.small-screen.select-list {
  padding: 5px;
}
</style>
                  <ul class="list-unstyled msg_list">
                    <li>
                      <a>
                        <span class="image">
                       <?php echo '<img src="'.htmlentities($dnn['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:200px;max-height:200px;" />'; ?>
    	                </span>
                        <span>
                          <span><?php echo urlencode($dnn['userName']); ?></span>
                          <span class="time"><?php  echo $userfr['date']; ?></span>
                        </span>
                        <span class="message">
                          <?php  echo $userfr['posst']; ?>
                        </span>
                      </a>
                    </li>
                  </ul>
				  <div style="background: #182735;height: 90px;">
    <table style="width: 100%;">
<tbody>
    <tr>
        
<td style="width: 109px;">
<input type="submit" id="comment" value="comment" class="btn btn-success btn-xs" style="width: 90%;">
<input type="submit" id="comment" value="Public" class="btn btn-success btn-xs" style=" ">
<input type="submit" id="comment" value="Great" class="btn btn-success btn-xs" style=" ">   
    </td>
    <td style="padding-top: 8px;">
	<textarea rows="4" cols="50" style="width: 100%;height: 70px;background: #0c131b63;border-color: #115682;">
	Type your comment here
    </textarea>
	</td>
	</tr>
        
</tbody>
</table>  
</div>
                </div>
				
              </div>
           
<?php  }}?>
			</div>  
					  
<div id="Paris" class="tabcontent">
 <p><?php echo $userRow['coment'] ?></p>
							<div class="x_content" dir="rtl" style="display: block;">

                   
                    <!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="
    width: 100%;
">
                        <div class="well profile_view" style="
    width: 100%;
    height: 100%;
">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>رئيس البنك الالكترونى</i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo htmlentities($dnn['userName'], ENT_QUOTES, 'UTF-8'); ?></h2>
                              <p><strong>عن: </strong> <?php echo htmlentities($dnn['jobs'], ENT_QUOTES, 'UTF-8'); ?> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> العنوان: <?php echo htmlentities($dnn['adress'], ENT_QUOTES, 'UTF-8'); ?></li>
                                <li><i class="fa fa-phone"></i> التليفون #:<?php echo htmlentities($dnn['mobile'], ENT_QUOTES, 'UTF-8'); ?> </li>
								 <li><i class="fa fa-phone"></i> العمر #: <?php echo htmlentities($dnn['userage'], ENT_QUOTES, 'UTF-8'); ?></li>
                              	 <li><i class="fa fa-phone"></i> الحالة #: <?php echo htmlentities($dnn['status'], ENT_QUOTES, 'UTF-8'); ?></li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="<?php echo htmlentities($dnn['userpic'], ENT_QUOTES, 'UTF-8');?>" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> اعرض السيرة الذاتية
                              </button>
							  <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> اطلب خدمة
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->

                  </div>
</div>
					  

<div id="Tokyo" class="tabcontent">
    <?php

	
 if($dnn['userName']!=$userRow['userName'])
{ 

} else { 
if (isset($_POST['btnsave'])) {
			
$dn2 = mysql_num_rows(mysql_query('select * from service where usid="'.$userRow['userId'].'"'));
			$idm = $dn2+1;
	$title=$_POST['tit']; $hour=$_POST['hour'];
	$dat= date('Y-m-d h:i:s A');$cost=$_POST['price'];$cilentnm=$_POST['cilntnm'];
	$givn=$_POST['gvtim'];$details=$_POST['detail'];
	$us=$userRow['userId'];$lnk=$_POST['lnk'];
			$query20 = "INSERT INTO service( title,id,hour,date,cost,cilentnm,givn,details,usid,lnk) VALUES('$title','$idm','$hour','$dat','$cost','$cilentnm','$givn','$details','$us','$lnk' )";

if(mysqli_query($conn, $query20)){
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
?> 
<form method="post" id="btnsave" name="btnsave" action="" autocomplete="off">
	  	
	<table class="table table-bordered table-responsive">

    <tr>
    	<td><label class="control-label"></label></td>
        <td><input    id="tit" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" type="text" name="tit" placeholder="عنوان الخدمة" value="<?php echo $title; ?>" /></td>
       <td><input   id="gvtim" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" type="text" name="gvtim" placeholder="المدة المحددة لتسليم الخدمة" value="<?php echo $givn; ?>" /></td>
    
        <td><input   id="cilntnm" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" type="text" name="cilntnm" placeholder="عدد العاملين" value="<?php echo $cilentnm; ?>" />

           <input   id="price" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" type="text" name="price" placeholder="تكلفة الخدمة" value="<?php echo $cost; ?>" />
	       <input   id="hour" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" type="text" name="hour" placeholder="عدد الساعات" value="<?php echo $hour; ?>" />
	 	
       <input    id="lnk" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" type="text" name="lnk" placeholder="واصلة خارجية" value="<?php echo $lnk; ?>" />
		 <input   id="detail" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 100%;height: 100px;left: 300px;border: 2px solid #2a3f54;" type="text" name="detail" placeholder="تفاصيل الخدمة" value="<?php echo $details; ?>" />
		
		</td>
   
        <td colspan="2"><button type="submit" name="btnsave" id="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; تسجيــــل
        </button>
        </td>
    </tr>
    
    </table>
</form>
	<?php  } ?>
	<?php
	$rmf=mysql_query('SELECT * FROM service WHERE usid="'.$dnn['userId'].'" ORDER BY id DESC LIMIT 30');
while($usse=mysql_fetch_array($rmf)){
  ?>
<div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_390">
						<h1><?php echo $usse['title'];?></h1>
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
							     <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                             
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="http://ebank.esy.es/login/Gentallela%20Alela!%20__files/img.jpg" alt="..." class="img-circle profile_img">
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"></h3>

                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3><?php echo $usse['cost'];?></h3>
                                  <span>ع.الساعات</span>
                                </li>
                                <li>
                                  <h3><?php echo $usse['hour'];?></h3>
                                  <span>ت.الساعة</span>
                                </li>
                                <li>
                                  <h3><?php echo $usse['cilentnm'];?></h3>
                                  <span>م.الاعضاء</span>
                                </li>
                              </ul>
                            </div>
                            <p>
							<?php echo $usse['date'];?>
							<br>
                           <?php echo $usse['givn'];?>
						   <br>
						   <?php echo $usse['details'];?> </p>
						 </div>
                        </div>
                      </div>                         
						 
<?php } ?> 
						 <p></p>
</div>

		
<div id="prlin" class="tabcontent">
<?php

	//define user
 if($dnn['userName']!=$userRow['userName'])
{ 
} else { 
 
$rr=mysql_query('SELECT * FROM follow WHERE id1="'.$userRow['userId'].'"  LIMIT 60');

while($usf=mysql_fetch_array($rr)){
	
 $gg=mysql_query('SELECT * FROM wallp WHERE id="'.$usf['id2'].'"  ORDER BY date DESC ');
 
while($uf=mysql_fetch_array($gg)){
	 $gkg=mysql_query('SELECT * FROM users WHERE userId="'.$usf['id2'].'" ');
$fg=mysql_fetch_array($gkg)
	
	?>
	 
              <div class="x_panel">
                <div class="x_content">
				
                  <ul class="list-unstyled msg_list">
                    <li>
                      <a>
                        <span class="image">
                       <?php echo '<img src="'.htmlentities($fg['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:200px;max-height:200px;" />'; ?>
    	                </span>
                        <span>
                          <span><?php echo urlencode($fg['userName']); ?></span>
                          <span class="time"><?php  echo $uf['date']; ?></span>
                        </span>
                        <span class="message">
                          <?php  echo $uf['posst']; ?>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
             
	<?php

}}}
?>
 
</div>
			
                    </div>

                  </div>
</div></div>









<!--scroller -->
<style type='text/css'>
    /* For the "inset" look only */
   html {
      overflow: auto;
    }
    body {
      position: absolute;
      top: 0px;
      left: 0px;
      bottom: 0px;
      right: 0px;
      padding: 0px; 
      overflow-y: scroll;
      overflow-x: scroll;
    }
    /* Let's get this party started */
    ::-webkit-scrollbar {
      width: 10px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px transparent; 
      -webkit-border-radius: 10px;
      border-radius: 10px;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
      -webkit-border-radius: 10px;
      border-radius: 10px;
     background: #172d44;
     webkit-box-shadow: inset 0 0 6px #2a3f54; 
    }
    ::-webkit-scrollbar-thumb:window-inactive {
      background: #3f3f3f; 
    }
  </style>
	<!--scroller -->
  <?php
			include('../login/menu.php');
		?>
   				 


<?php  
/* ####################  #################################   ##################    ##################*/

 }else{?>

                   <div class="x_content" style="display: block;height: 606px;">
                 <div class="col-md-12">
				 


      
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <div class="tab">
                      <button class="tablinks active" onclick="openCity(event, 'London')">يوميــات</button>
                      <button class="tablinks" onclick="openCity(event, 'Paris')">الملف الشخصي</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">الخدمات</button>
                      </div>
                     
<div id="London" class="tabcontent">
<p><?php echo $dnn['coment']; ?></p>
 
  
  
   <?php 
						 	// select loggedin users detail
							$us=$_SESSION['user'];
							$uid=$userRow['userId'];
$rf=mysql_query('SELECT * FROM wallp WHERE id="'.$dnn['coment'].'" ');
	
while($userfr=mysql_fetch_array($rf)){
  ?>
<div class="col-md-6">
              <div class="x_panel">
                <div class="x_content">
				
                  <ul class="list-unstyled msg_list">
                    <li>
                      <a>
                        <span class="image">
                       <?php echo '<img src="'.htmlentities($dnn['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:200px;max-height:200px;" />'; ?>
    	                </span>
                        <span>
                          <span><?php echo urlencode($dnn['userName']); ?></span>
                          <span class="time"><?php  echo $userfr['date']; ?></span>
                        </span>
                        <span class="message">
                          <?php  echo $userfr['posst']; ?>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
				<?php  }?>
			</div>  

<div id="Paris" class="tabcontent">
<p><?php echo $userRow['coment'] ?></p>
							<div class="x_content" dir="rtl" style="display: block;">

                   
                    <!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="
    width: 100%;
">
                        <div class="well profile_view" style="
    width: 100%;
    height: 100%;
">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>رئيس البنك الالكترونى</i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo htmlentities($dnn['userName'], ENT_QUOTES, 'UTF-8'); ?></h2>
                              <p><strong>عن: </strong> <?php echo htmlentities($dnn['jobs'], ENT_QUOTES, 'UTF-8'); ?> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> العنوان: <?php echo htmlentities($dnn['adress'], ENT_QUOTES, 'UTF-8'); ?></li>
                                <li><i class="fa fa-phone"></i> التليفون #:<?php echo htmlentities($dnn['mobile'], ENT_QUOTES, 'UTF-8'); ?> </li>
								 <li><i class="fa fa-phone"></i> العمر #: <?php echo htmlentities($dnn['userage'], ENT_QUOTES, 'UTF-8'); ?></li>
                              	 <li><i class="fa fa-phone"></i> الحالة #: <?php echo htmlentities($dnn['status'], ENT_QUOTES, 'UTF-8'); ?></li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="<?php echo htmlentities($dnn['userpic'], ENT_QUOTES, 'UTF-8');?>" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> اعرض السيرة الذاتية
                              </button>
							  <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> اطلب خدمة
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->

                  </div>
</div>

<div id="Tokyo" class="tabcontent">
	    
	
	
	


	<?php
	$rmf=mysql_query('SELECT * FROM service WHERE usid="'.$dnn['userId'].'" ORDER BY id DESC LIMIT 30');
while($usse=mysql_fetch_array($rmf)){
  ?>
<div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_390">
						<h1><?php echo $usse['title'];?></h1>
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
							     <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                             
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="http://ebank.esy.es/login/Gentallela%20Alela!%20__files/img.jpg" alt="..." class="img-circle profile_img">
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"></h3>

                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3><?php echo $usse['cost'];?></h3>
                                  <span>ع.الساعات</span>
                                </li>
                                <li>
                                  <h3><?php echo $usse['hour'];?></h3>
                                  <span>ت.الساعة</span>
                                </li>
                                <li>
                                  <h3><?php echo $usse['cilentnm'];?></h3>
                                  <span>م.الاعضاء</span>
                                </li>
                              </ul>
                            </div>
                            <p>
							<?php echo $usse['date'];?>
							<br>
                           <?php echo $usse['givn'];?>
						   <br>
						   <?php echo $usse['details'];?> </p>
						 </div>
                        </div>
                      </div>                         
						 
<?php } ?> 
	<p></p>
</div>


                    </div>

                  </div>
				   </div>

 </div>	
 </div>
    </div>

   
	  <?php }?>
                
        
    
<?php

	}
	else
	{
		echo 'This user dont exists.';
	}
}
else
{
	echo ' ربما تكون ادخلت الرقم التعريفى خطأ ';
	echo '</br>';
	echo 'لقد تم تحويل الروابط من الرقم التعريفى الى الاسماء لذا يرجا  كتابة الاسم بعد الرابط مباشرا';
	echo '</br>';
	echo 'مثال';
	echo '</br>';
	echo '<a href="http://www.ebank.esy.es/ebank">';
	echo 'ebank.esy.es/ebank' ;
	echo '</a>';
}
?>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
 window.onload = openCity(event,'London');
</script>
 <!-- jQuery -->
 
	<script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.min.js.download"></script>
    <!-- Bootstrap -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/bootstrap.min.js.download"></script>
    <!-- FastClick -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/fastclick.js.download"></script>
    <!-- NProgress -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/nprogress.js.download"></script>
    <!-- Chart.js -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/Chart.min.js.download"></script>
    <!-- gauge.js -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/gauge.min.js.download"></script>
    <!-- bootstrap-progressbar -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/bootstrap-progressbar.min.js.download"></script>
    <!-- iCheck -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/icheck.min.js.download"></script>
    <!-- Skycons -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/skycons.js.download"></script>
    <!-- Flot -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.pie.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.time.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.stack.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.resize.js.download"></script>
    <!-- Flot plugins -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.orderBars.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/date.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.spline.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/curvedLines.js.download"></script>
    <!-- jVectorMap -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery-jvectormap-2.0.3.min.js.download"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/moment.min.js.download"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/daterangepicker.js.download"></script>

    <!-- Custom Theme Scripts -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/custom.min.js"></script>
<script  src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>
	
	<!--- Edit -->
	<style>
	ul.msg_list li:last-child {
     margin-bottom: 0px !important;
     padding: 0px !important;
}

ul.msg_list li {
    background: #0c131b;
     padding: 0px !important;
    display: -ms-flexbox;
    display: table;
     margin: 0px 0px 0 !important;
    width: 100% !important;
}
	</style>
<script>
/*
 * SmartWizard 3.3.1 plugin
 * jQuery Wizard control Plugin
 * by Dipu
 *
 * Refactored and extended:
 * https://github.com/mstratman/jQuery-Smart-Wizard
 *
 * Original URLs:
 * http://www.techlaboratory.net
 * http://tech-laboratory.blogspot.com
 */

function SmartWizard(target, options) {
    this.target       = target;
    this.options      = options;
    this.curStepIdx   = options.selected;
    this.steps        = $(target).children("ul").children("li").children("a"); // Get all anchors
    this.contentWidth = 0;
    this.msgBox = $('<div class="msgBox"><div class="content"></div><a href="#" class="close">X</a></div>');
    this.elmStepContainer = $('<div></div>').addClass("stepContainer");
    this.loader = $('<div>Loading</div>').addClass("loader");
    this.buttons = {
        next : $('<a>'+options.labelNext+'</a>').attr("href","#").addClass("buttonNext"),
        previous : $('<a>'+options.labelPrevious+'</a>').attr("href","#").addClass("buttonPrevious"),
        finish  : $('<a>'+options.labelFinish+'</a>').attr("href","#").addClass("buttonFinish")
    };

    /*
     * Private functions
     */

    var _init = function($this) {
        var elmActionBar = $('<div></div>').addClass("actionBar");
        elmActionBar.append($this.msgBox);
        $('.close',$this.msgBox).click(function() {
            $this.msgBox.fadeOut("normal");
            return false;
        });

        var allDivs = $this.target.children('div');
        $this.target.children('ul').addClass("anchor");
        allDivs.addClass("content");

        // highlight steps with errors
        if($this.options.errorSteps && $this.options.errorSteps.length>0){
            $.each($this.options.errorSteps, function(i, n){
                $this.setError({ stepnum: n, iserror:true });
            });
        }

        $this.elmStepContainer.append(allDivs);
        elmActionBar.append($this.loader);
        $this.target.append($this.elmStepContainer);
        elmActionBar.append($this.buttons.finish)
                    .append($this.buttons.next)
                    .append($this.buttons.previous);
        $this.target.append(elmActionBar);
        this.contentWidth = $this.elmStepContainer.width();

        $($this.buttons.next).click(function() {
            $this.goBackward();
            return false;
        });
        $($this.buttons.previous).click(function() {
            $this.goForward();
            return false;
        });
        $($this.buttons.finish).click(function() {
            if(!$(this).hasClass('buttonDisabled')){
                if($.isFunction($this.options.onFinish)) {
                    var context = { fromStep: $this.curStepIdx + 1 };
                    if(!$this.options.onFinish.call(this,$($this.steps), context)){
                        return false;
                    }
                }else{
                    var frm = $this.target.parents('form');
                    if(frm && frm.length){
                        frm.submit();
                    }
                }
            }
            return false;
        });

        $($this.steps).bind("click", function(e){
            if($this.steps.index(this) == $this.curStepIdx){
                return false;
            }
            var nextStepIdx = $this.steps.index(this);
            var isDone = $this.steps.eq(nextStepIdx).attr("isDone") - 0;
            if(isDone == 1){
                _loadContent($this, nextStepIdx);
            }
            return false;
        });

        // Enable keyboard navigation
        if($this.options.keyNavigation){
            $(document).keyup(function(e){
                if(e.which==39){ // Right Arrow
                    $this.goForward();
                }else if(e.which==37){ // Left Arrow
                    $this.goBackward();
                }
            });
        }
        //  Prepare the steps
        _prepareSteps($this);
        // Show the first slected step
        _loadContent($this, $this.curStepIdx);
    };

    var _prepareSteps = function($this) {
        if(! $this.options.enableAllSteps){
            $($this.steps, $this.target).removeClass("selected").removeClass("done").addClass("disabled");
            $($this.steps, $this.target).attr("isDone",0);
        }else{
            $($this.steps, $this.target).removeClass("selected").removeClass("disabled").addClass("done");
            $($this.steps, $this.target).attr("isDone",1);
        }

        $($this.steps, $this.target).each(function(i){
            $($(this).attr("href").replace(/^.+#/, '#'), $this.target).hide();
            $(this).attr("rel",i+1);
        });
    };

    var _step = function ($this, selStep) {
        return $(
            $(selStep, $this.target).attr("href").replace(/^.+#/, '#'),
            $this.target
        );
    };

    var _loadContent = function($this, stepIdx) {
        var selStep = $this.steps.eq(stepIdx);
        var ajaxurl = $this.options.contentURL;
        var ajaxurl_data = $this.options.contentURLData;
        var hasContent = selStep.data('hasContent');
        var stepNum = stepIdx+1;
        if (ajaxurl && ajaxurl.length>0) {
            if ($this.options.contentCache && hasContent) {
                _showStep($this, stepIdx);
            } else {
                var ajax_args = {
                    url: ajaxurl,
                    type: "POST",
                    data: ({step_number : stepNum}),
                    dataType: "text",
                    beforeSend: function(){
                        $this.loader.show();
                    },
                    error: function(){
                        $this.loader.hide();
                    },
                    success: function(res){
                        $this.loader.hide();
                        if(res && res.length>0){
                            selStep.data('hasContent',true);
                            _step($this, selStep).html(res);
                            _showStep($this, stepIdx);
                        }
                    }
                };
                if (ajaxurl_data) {
                    ajax_args = $.extend(ajax_args, ajaxurl_data(stepNum));
                }
                $.ajax(ajax_args);
            }
        }else{
            _showStep($this,stepIdx);
        }
    };

    var _showStep = function($this, stepIdx) {
        var selStep = $this.steps.eq(stepIdx);
        var curStep = $this.steps.eq($this.curStepIdx);
        if(stepIdx != $this.curStepIdx){
            if($.isFunction($this.options.onLeaveStep)) {
                var context = { fromStep: $this.curStepIdx+1, toStep: stepIdx+1 };
                if (! $this.options.onLeaveStep.call($this,$(curStep), context)){
                    return false;
                }
            }
        }
        $this.elmStepContainer.height(_step($this, selStep).outerHeight());
        var prevCurStepIdx = $this.curStepIdx;
        $this.curStepIdx =  stepIdx;
        if ($this.options.transitionEffect == 'slide'){
            _step($this, curStep).slideUp("fast",function(e){
                _step($this, selStep).slideDown("fast");
                _setupStep($this,curStep,selStep);
            });
        } else if ($this.options.transitionEffect == 'fade'){
            _step($this, curStep).fadeOut("fast",function(e){
                _step($this, selStep).fadeIn("fast");
                _setupStep($this,curStep,selStep);
            });
        } else if ($this.options.transitionEffect == 'slideright'){
            var nextElmLeft = 0;
            var nextElmLeft1 = null;
            var nextElmLeft = null;
            var curElementLeft = 0;
            if(stepIdx > prevCurStepIdx){
                nextElmLeft1 = $this.contentWidth + 10;
                nextElmLeft2 = 0;
                curElementLeft = 0 - _step($this, curStep).outerWidth();
            } else {
                nextElmLeft1 = 0 - _step($this, selStep).outerWidth() + 20;
                nextElmLeft2 = 0;
                curElementLeft = 10 + _step($this, curStep).outerWidth();
            }
            if (stepIdx == prevCurStepIdx) {
                nextElmLeft1 = $($(selStep, $this.target).attr("href"), $this.target).outerWidth() + 20;
                nextElmLeft2 = 0;
                curElementLeft = 0 - $($(curStep, $this.target).attr("href"), $this.target).outerWidth();
            } else {
                $($(curStep, $this.target).attr("href"), $this.target).animate({left:curElementLeft},"fast",function(e){
                    $($(curStep, $this.target).attr("href"), $this.target).hide();
                });
            }

            _step($this, selStep).css("left",nextElmLeft1).show().animate({left:nextElmLeft2},"fast",function(e){
                _setupStep($this,curStep,selStep);
            });
        } else {
            _step($this, curStep).hide();
            _step($this, selStep).show();
            _setupStep($this,curStep,selStep);
        }
        return true;
    };

    var _setupStep = function($this, curStep, selStep) {
        $(curStep, $this.target).removeClass("selected");
        $(curStep, $this.target).addClass("done");

        $(selStep, $this.target).removeClass("disabled");
        $(selStep, $this.target).removeClass("done");
        $(selStep, $this.target).addClass("selected");

        $(selStep, $this.target).attr("isDone",1);

        _adjustButton($this);

        if($.isFunction($this.options.onShowStep)) {
            var context = { fromStep: parseInt($(curStep).attr('rel')), toStep: parseInt($(selStep).attr('rel')) };
            if(! $this.options.onShowStep.call(this,$(selStep),context)){
                return false;
            }
        }
        if ($this.options.noForwardJumping) {
            // +2 == +1 (for index to step num) +1 (for next step)
            for (var i = $this.curStepIdx + 2; i <= $this.steps.length; i++) {
                $this.disableStep(i);
            }
        }
    };

    var _adjustButton = function($this) {
        if (! $this.options.cycleSteps){
            if (0 >= $this.curStepIdx) {
                $($this.buttons.previous).addClass("buttonDisabled");
				if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.previous).hide();
                }
            }else{
                $($this.buttons.previous).removeClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.previous).show();
                }
            }
            if (($this.steps.length) <= $this.curStepIdx){
                $($this.buttons.next).addClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.next).hide();
                }
            }else{
                $($this.buttons.next).removeClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.next).show();
                }
            }
        }
        // Finish Button
        if (! $this.steps.hasClass('disabled') || $this.options.enableFinishButton){
            $($this.buttons.finish).removeClass("buttonDisabled");
            if ($this.options.hideButtonsOnDisabled) {
                $($this.buttons.finish).show();
            }
        }else{
            $($this.buttons.finish).addClass("buttonDisabled");
            if ($this.options.hideButtonsOnDisabled) {
                $($this.buttons.finish).hide();
            }
        }
    };

    /*
     * Public methods
     */

    SmartWizard.prototype.goForward = function(){
        var nextStepIdx = this.curStepIdx + 1;
        if (this.steps.length <= nextStepIdx){
            if (! this.options.cycleSteps){
                return false;
            }
            nextStepIdx = 0;
        }
        _loadContent(this, nextStepIdx);
    };

    SmartWizard.prototype.goBackward = function(){
        var nextStepIdx = this.curStepIdx-1;
        if (0 > nextStepIdx){
            if (! this.options.cycleSteps){
                return false;
            }
            nextStepIdx = this.steps.length - 1;
        }
        _loadContent(this, nextStepIdx);
    };

    SmartWizard.prototype.goToStep = function(stepNum){
        var stepIdx = stepNum - 1;
        if (stepIdx >= 0 && stepIdx < this.steps.length) {
            _loadContent(this, stepIdx);
        }
    };
    SmartWizard.prototype.enableStep = function(stepNum) {
        var stepIdx = stepNum - 1;
        if (stepIdx == this.curStepIdx || stepIdx < 0 || stepIdx >= this.steps.length) {
            return false;
        }
        var step = this.steps.eq(stepIdx);
        $(step, this.target).attr("isDone",1);
        $(step, this.target).removeClass("disabled").removeClass("selected").addClass("done");
    }
    SmartWizard.prototype.disableStep = function(stepNum) {
        var stepIdx = stepNum - 1;
        if (stepIdx == this.curStepIdx || stepIdx < 0 || stepIdx >= this.steps.length) {
            return false;
        }
        var step = this.steps.eq(stepIdx);
        $(step, this.target).attr("isDone",0);
        $(step, this.target).removeClass("done").removeClass("selected").addClass("disabled");
    }
    SmartWizard.prototype.currentStep = function() {
        return this.curStepIdx + 1;
    }

    SmartWizard.prototype.showMessage = function (msg) {
        $('.content', this.msgBox).html(msg);
        this.msgBox.show();
    }
    SmartWizard.prototype.hideMessage = function () {
        this.msgBox.fadeOut("normal");
    }
    SmartWizard.prototype.showError = function(stepnum) {
        this.setError(stepnum, true);
    }
    SmartWizard.prototype.hideError = function(stepnum) {
        this.setError(stepnum, false);
    }
    SmartWizard.prototype.setError = function(stepnum,iserror) {
        if (typeof stepnum == "object") {
            iserror = stepnum.iserror;
            stepnum = stepnum.stepnum;
        }

        if (iserror){
            $(this.steps.eq(stepnum-1), this.target).addClass('error')
        }else{
            $(this.steps.eq(stepnum-1), this.target).removeClass("error");
        }
    }

    SmartWizard.prototype.fixHeight = function(){
        var height = 0;

        var selStep = this.steps.eq(this.curStepIdx);
        var stepContainer = _step(this, selStep);
        stepContainer.children().each(function() {
            height += $(this).outerHeight();
        });

        // These values (5 and 20) are experimentally chosen.
        stepContainer.height(height + 5);
        this.elmStepContainer.height(height + 20);
    }

    _init(this);
};



(function($){

$.fn.smartWizard = function(method) {
    var args = arguments;
    var rv = undefined;
    var allObjs = this.each(function() {
        var wiz = $(this).data('smartWizard');
        if (typeof method == 'object' || ! method || ! wiz) {
            var options = $.extend({}, $.fn.smartWizard.defaults, method || {});
            if (! wiz) {
                wiz = new SmartWizard($(this), options);
                $(this).data('smartWizard', wiz);
            }
        } else {
            if (typeof SmartWizard.prototype[method] == "function") {
                rv = SmartWizard.prototype[method].apply(wiz, Array.prototype.slice.call(args, 1));
                return rv;
            } else {
                $.error('Method ' + method + ' does not exist on jQuery.smartWizard');
            }
        }
    });
    if (rv === undefined) {
        return allObjs;
    } else {
        return rv;
    }
};

// Default Properties and Events
$.fn.smartWizard.defaults = {
    selected: 9,  // Selected Step, 0 = first step
    keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
    enableAllSteps: false,
    transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
    contentURL:null, // content url, Enables Ajax content loading
    contentCache:true, // cache step contents, if false content is fetched always from ajax url
    cycleSteps: false, // cycle step navigation
    enableFinishButton: false, // make finish button enabled always
	hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead?
    errorSteps:[],    // Array Steps with errors
    labelNext:'تقدم',
    labelPrevious:'رجوع',
    labelFinish:'انهاء',
    noForwardJumping: false,
    onLeaveStep: null, // triggers when leaving a step
    onShowStep: null,  // triggers when showing a step
    onFinish: null  // triggers when Finish button is clicked
};

})(jQuery);
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
 </body>
</html>