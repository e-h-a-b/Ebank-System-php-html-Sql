	<?php 
 
ob_start();
	session_start();
	if( isset($_SESSION['user'])!="" ){
		header("Location: profile.php");
	}
	include_once 'dbconnect.php';
	$error = false;

	$name=$_GET['name'];
$userage=$_GET['userage'];
$sex=$_GET['sex'];
$education=$_GET['Last_education'];
$post=$_GET['post'];
$mob=$_GET['mobile'];
$adres=$_GET['adress'];
$Bala=$_GET['Balance'];
$urpic=$_GET['userpic'];
$army=$_GET['armyserv'];
$tele=$_GET['telephone'];
$jobs=$_GET['jobs'];
$email=$_GET['email'];
$pass=$_GET['pass'];
$cardnum=$_GET['cardnum'];
$perid=$_GET['perid'];

if(isset($_POST['btn-signup']) or $_SERVER["REQUEST_METHOD"]=='POST' )
{
	if(strcmp($_SESSION['code'], $_POST['code']) != 0)
	{
	  
			$error = true;
			$captchaerror = "The captcha code does not match!";
		 
	 
}else{    
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		
		$userage= trim($_POST['userage']);
		$userage= strip_tags($userage);
		$userage= htmlspecialchars($userage);
		
		//---------------------------------------------
		//-userId    2
		//*Last_education    1
		//*jobs    1
		//*Sex      1
		//*post      1
		//*mobile     1
		//*adress      1
		//*userName     1
		//*userEmail     1
		//*userPass      1
		//*userage       1
		//*cardnum       1
		//*perid         1
		//*Balance      1
		//-date_sign   2
		//*userpic    1
		//-userIP     2
		//*armyserv   1
		//*telephone   1
		//---------------------------------------------
		$sex= trim($_POST['sex']);
		$sex= strip_tags($sex);
		$sex= htmlspecialchars($sex);
		
		$education= trim($_POST['Last_education']);
		$education= strip_tags($education);
		$education= htmlspecialchars($education);
		
		$post= trim($_POST['post']);
		$post= strip_tags($post);
		$post= htmlspecialchars($post);
		
		$mob= trim($_POST['mobile']);
		$mob= strip_tags($mob);
		$mob= htmlspecialchars($mob);

		$adres= trim($_POST['adress']);
		$adres= strip_tags($adres);
		$adres= htmlspecialchars($adres);
		
		$Bala= trim($_POST['Balance']);
		$Bala= strip_tags($Bala);
		$Bala= htmlspecialchars($Bala);
		
		
		$urpic= trim($_POST['userpic']);
		$urpic= strip_tags($urpic);
		$urpic= htmlspecialchars($urpic);
		
		$army= trim($_POST['armyserv']);
		$army= strip_tags($army);
		$army= htmlspecialchars($army);
		
		$tele= trim($_POST['telephone']);
		$tele= strip_tags($tele);
		$tele= htmlspecialchars($tele);
		
		$jobs= trim($_POST['jobs']);
		$jobs= strip_tags($jobs);
		$jobs= htmlspecialchars($jobs);
		//--------------------------------------------------------
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
   

		$cardnum = trim($_POST['cardnum']);
		$cardnum = strip_tags($cardnum);
		$cardnum = htmlspecialchars($cardnum);

		$perid= trim($_POST['perid']);
		$perid= strip_tags($perid);
		$perid= htmlspecialchars($perid);
		
		$ipaddress = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

        $date = date('Y-m-d h:i:s A');
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1575;&#1583;&#1582;&#1604; &#1575;&#1587;&#1605;&#1603; &#1576;&#1575;&#1604;&#1603;&#1575;&#1605;&#1604;";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "&#1610;&#1580;&#1576; &#1575;&#1604;&#1575; &#1610;&#1602;&#1604; &#1593;&#1606; &#1579;&#1604;&#1575;&#1579;&#1577; &#1575;&#1581;&#1585;&#1601;";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "&#1610;&#1580;&#1576; &#1575;&#1606; &#1610;&#1603;&#1608;&#1606; &#1575;&#1604;&#1575;&#1587;&#1605; &#1605;&#1581;&#1578;&#1608;&#1609; &#1593;&#1604;&#1609; &#1581;&#1585;&#1608;&#1601; &#1608;&#1605;&#1587;&#1575;&#1601;&#1577;";
		}
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1571;&#1583;&#1582;&#1604; &#1575;&#1604;&#1575;&#1610;&#1605;&#1610;&#1604; &#1575;&#1604;&#1589;&#1581;&#1610;&#1581;";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "&#1575;&#1604;&#1575;&#1610;&#1605;&#1610;&#1604; &#1575;&#1604;&#1584;&#1609; &#1578;&#1581;&#1575;&#1608;&#1604; &#1578;&#1587;&#1580;&#1610;&#1604;&#1577; &#1605;&#1608;&#1580;&#1608;&#1583; &#1576;&#1575;&#1604;&#1601;&#1593;&#1604; &#1576;&#1587;&#1580;&#1604;&#1575;&#1578;&#1606;&#1575;";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1575;&#1583;&#1582;&#1604; &#1575;&#1604;&#1576;&#1575;&#1587;&#1608;&#1585;&#1583;";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "&#1610;&#1580;&#1576; &#1575;&#1604;&#1575; &#1610;&#1602;&#1604; &#1575;&#1604;&#1576;&#1575;&#1587;&#1608;&#1585;&#1583; &#1593;&#1606; 6 &#1575;&#1581;&#1585;&#1601;";
		}
        // age  validation
		if (empty($userage)){
			$error = true;
			$ageError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1575;&#1583;&#1582;&#1604; &#1575;&#1604;&#1593;&#1605;&#1585;";
		} else if(strlen($userage) < 2) {
			$error = true;
			$ageError = "&#1604;&#1575; &#1610;&#1580;&#1608;&#1586; &#1605;&#1591;&#1604;&#1602;&#1575; &#1607;&#1584;&#1575; &#1575;&#1604;&#1593;&#1605;&#1585; &#1605;&#1606; &#1601;&#1590;&#1604; &#1575;&#1583;&#1582;&#1604; &#1575;&#1604;&#1593;&#1605;&#1585; &#1575;&#1604;&#1589;&#1581;&#1610;&#1581;";
		}
        // cardnum validation
		if (empty($cardnum)){
			$error = true;
			$cardnumError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1575;&#1583;&#1582;&#1604; &#1585;&#1602;&#1605; &#1575;&#1604;&#1603;&#1575;&#1585;&#1578;";
		} else if(strlen($cardnum) < 14) {
			$error = true;
			$cardnumError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1575;&#1583;&#1582;&#1604; &#1575;&#1585;&#1576;&#1593;&#1577; &#1593;&#1588;&#1585; &#1585;&#1602;&#1605;&#1575; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1603;";
		}
        // perid validation
		if (empty($perid)){
			$error = true;
			$peridError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1571;&#1583;&#1582;&#1604; &#1585;&#1602;&#1605; &#1575;&#1604;&#1576;&#1591;&#1575;&#1602;&#1577; &#1575;&#1604;&#1588;&#1582;&#1589;&#1610;&#1577;";
		} else if(strlen($perid) < 14) {
			$error = true;
			$peridError = "&#1605;&#1606; &#1601;&#1590;&#1604;&#1603; &#1575;&#1583;&#1582;&#1604; &#1575;&#1585;&#1576;&#1593;&#1577; &#1593;&#1588;&#1585; &#1585;&#1602;&#1605;&#1575; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1603;";
		}
		 // sex validation
		 if (empty($sex)){
         $error = true;
	     $sexError = "من فضلك أدخل نوعك";
	
        }
		//*
		// education validation
		 if (empty($education)) {
         $error = true;
	     $educationError = "من فضلك أدخل اخر مرحلة تعليمية";
	
        }
		// post validation
		 if (empty($post)) {
         $error = true;
	     $postError = "من فضلك أدخل  رقم البريد الخاص بك";
	
        }
		// mob validation
		 if (empty($mob)) {
         $error = true;
	     $mobError = "من فضلك أدخل رقم المحمول الخاص بك";
	
        }
		// adres validation
		 if (empty($adres)) {
         $error = true;
	     $adresError = "من فضلك أدخل  العنوان الخاص بك على النحو التالى";
	
        }
		// urpic validation
		// if (empty($urpic)) {
       //  $error = true;
//$urpicError = "من فضلك أدخل صورة واضحة المعالم الخاصة بك";
	
       // }
		// army validation
		 if (empty($army)) {
         $error = true;
	     $armyError = "من فضلك أدخل موقفك من الخدمة العسكرية";
	
        }
		// tele validation
		 if (empty($tele)) {
         $error = true;
	     $teleError = "من فضلك أدخل رقم المنزل الخاص بك";
	
        }
		// jobs validation
		 if (empty($jobs)) {
         $error = true;
	     $jobsError = "من فضلك أدخل الوظيفة ان كنت تعمل";
	
        }
		//*
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		//*userId    2
		//*Last_education    1
		//*jobs    1
		//*Sex      1
		//*post      1
		//*mobile     1
		//*adress      1
		//userName     1
		//userEmail     1
		//userPass      1
		//userage       1
		//cardnum       1
		//perid         1
		//Balance      2
		//date_sign   2
		//userpic    1
		//userIP     2
		//armyserv   1
		//telephone   1
		// if there's no error, continue to signup
		if( !$error ) {
			$dn2 = mysql_num_rows(mysql_query('select userId from users'));
			$id = $dn2+1;
			
			$query = "INSERT INTO users(userId,userName,userEmail,userPass,userage,cardnum,perid,Last_education,jobs,sex,post,mobile,adress,armyserv,telephone,date_sign) VALUES('$id','$name','$email','$password','$userage','$cardnum','$perid','$education','$jobs','$sex','$post','$mob','$adres','$army','$tele','$date')";
			
			  
			  
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
							  header("Location: profile.php");
			} else {
				$errTyp = "danger";
				$errMSG = "&#1581;&#1583;&#1579; &#1582;&#1591;&#1571; &#1605;&#1575; ,&#1575;&#1593;&#1583; &#1575;&#1604;&#1605;&#1581;&#1575;&#1608;&#1604;&#1577; &#1605;&#1585;&#1577; &#1575;&#1582;&#1585;&#1609;";	
			}	
				
		}
		
		
	
 
}}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-EBANKالبنك الالكتروني المصري | ُ</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />


  
  
  
  
  
    <!-- Bootstrap -->
    <link href="https://colorlib.com/polygon/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="https://colorlib.com/polygon/gentelella/build/css/custom.min.css" rel="stylesheet">

</head>
<body>

<div class="container">

	<div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-12">
         
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
           
            <div class="form-group">
		
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="name" class="form-control" placeholder="&#1571;&#1583;&#1582;&#1604; &#1571;&#1587;&#1605;&#1603;" maxlength="50" value="<?php echo $name ?>" />
                
                <span class="text-danger"><?php echo $nameError; ?></span>
          
		  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="text" name="post" class="form-control" placeholder="ادخل رقم البريد الخاص بك" maxlength="15" value="<?php echo $post ?>"/>
                
                <span class="text-danger"><?php echo $postError; ?></span> </div>
				</div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="&#1571;&#1583;&#1582;&#1604; &#1575;&#1604;&#1576;&#1575;&#1587;&#1608;&#1585;&#1583;" maxlength="15" />
                
                <span class="text-danger"><?php echo $passError; ?></span>
           
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="&#1571;&#1593;&#1575;&#1583;&#1577; &#1603;&#1578;&#1575;&#1576;&#1577; &#1575;&#1604;&#1576;&#1575;&#1587;&#1608;&#1585;&#1583;" maxlength="15" />
                
                <span class="text-danger"><?php echo $passError; ?></span></div>
            </div>


            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
            	<input type="text" name="userage" class="form-control" placeholder="&#1571;&#1583;&#1582;&#1604; &#1593;&#1605;&#1585;&#1603;" maxlength="15" value="<?php echo $userage ?>"/>
                
                <span class="text-danger"><?php echo $ageError; ?></span>
           
                <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
            	<input type="text" name="cardnum" class="form-control" placeholder="&#1571;&#1583;&#1582;&#1604; &#1575;&#1604;&#1585;&#1602;&#1605; &#1575;&#1604;&#1576;&#1606;&#1603;&#1609;" maxlength="15" value="<?php echo $cardnum ?>"/>
               
                <span class="text-danger"><?php echo $cardnumError; ?></span> </div>
            </div>

            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="text" name="perid" class="form-control" placeholder="&#1585;&#1602;&#1605; &#1575;&#1604;&#1576;&#1591;&#1575;&#1602;&#1577; &#1575;&#1604;&#1588;&#1582;&#1589;&#1610;&#1577;" maxlength="15" value="<?php echo $perid ?>"/>
                
                <span class="text-danger"><?php echo $peridError; ?></span>
        
            	
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="text" name="Last_education" class="form-control" placeholder="ادخل اخر مرحلة تعليمية" maxlength="15" value="<?php echo $education ?>"/>
                
                <span class="text-danger"><?php echo $educationError; ?></span></div>
            </div>

			<div class="form-group">
            	<div class="input-group"> 
            	 
				 <input type="radio" id="radio1" name="sex" value="انثي" checked>
       <label for="radio1" class="fa-female">انثي</label>
    <input type="radio" id="radio2" name="sex"value="ذكر">
       <label for="radio2" class="fa-male">ذكر</label>
     
				</div>
                <span class="text-danger"><?php echo $sexError; ?></span>
				</div>
				<div class="form-group">
            <div class="input-group">
			
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="email" name="email" class="form-control" placeholder="&#1571;&#1583;&#1581;&#1604; &#1575;&#1604;&#1575;&#1610;&#1605;&#1610;&#1604;" maxlength="40" value="<?php echo $email ?>" />
                
                <span class="text-danger"><?php echo $emailError; ?></span>
          
			
			
			
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="text" name="post" class="form-control" placeholder="ادخل رقم البريد الخاص بك" maxlength="15" value="<?php echo $post ?>"/>
                
                <span class="text-danger"><?php echo $postError; ?></span></div>
            </div>
<div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
            	<input type="text" name="mobile" class="form-control" placeholder="ادخل رقم الحمول الخاص بك" maxlength="15" value="<?php echo $mob ?>"/>
                
                <span class="text-danger"><?php echo $mobError; ?></span>
            
                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            	<input type="text" name="telephone" class="form-control" placeholder="ادخل رقم الهاتف المنزلي" maxlength="15" value="<?php echo $tele ?>"/>
               
                <span class="text-danger"><?php echo $teleError; ?></span> </div>
            </div>
			<div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
            	<input type="text" name="jobs" class="form-control" placeholder="ادخل الوظيفة كنت تعمل" maxlength="15" value="<?php echo $jobs ?>"/>
               
                <span class="text-danger"><?php echo $jobsError; ?></span>
           
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            	<input type="text" name="adress" class="form-control" placeholder="ادخل العنوان الخاص بك  على النحو التالى(بلد,مدينة,المنطقة,العمارة)" maxlength="15" value="<?php echo $adres ?>"/>
                
                <span class="text-danger"><?php echo $adresError; ?></span></div>
            </div>
            <div class="form-group">
            	<div class="input-group">
                 
            	  
	<input type="radio" id="radio3" name="armyserv" value="انهيت الخدمة" checked><label for="radio3"  >انهيت الخدمة</label>
    <input type="radio" id="radio4" name="armyserv"value="فى الخدمة"><label for="radio4"  >فى الخدمة</label>
	<input type="radio" id="radio5" name="armyserv" value="اعفاء مؤقت" ><label for="radio5"  >اعفاء مؤقت</label>
    <input type="radio" id="radio6" name="armyserv"value="اعفاء نهائي"><label for="radio6" class="fa-male">اعفاء نهائي</label>
                <span class="text-danger"><?php echo $armyError; ?></span></div>
            </div>

  
             
            <?php 
include('header.php');
?>

<body>
<br><br>

    <form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail"></label>
    <div class="controls">

<img  src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='image_captcha' > 
<a href='javascript: refreshing_Captcha();'><i class="icon-refresh icon-large"></i></a> 
<script language='JavaScript' type='text/javascript'>
	function refreshing_Captcha()
	{
		var img = document.images['image_captcha'];
		img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	}
</script>
	
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Enter the Code Above</label>
    <div class="controls">
    <input id="code" name="code" type="text" placeholder="Enter the Code Above" required></td>
    </div>
    </div>
    <div class="control-group">
    <div class="controls">
    <button type="submit" name="submit" name="btn-signup" class="btn btn-primary"><i class="icon-ok icon-large"></i> Submit</button>
    </div>
    </div>
    </form>
 
 <?php if ( isset($captchaerror) ) { ?>
	<div class="span4">	
	<div class="alert alert-danger"><?php echo $captchaerror; ?></div>
	</div>
			<?php } ?>

</body>
</html>
            <div class="form-group">
            	<a href="profile.php">&#1578;&#1601;&#1590;&#1604; &#1576;&#1575;&#1604;&#1583;&#1582;&#1608;&#1604;...</a>
            </div>
        
        </div>
   
    </form>
    </div>	

</div>
<style>

body {
	height:100%;
	width:100%;
	margin:0;padding:0;
	    background-color: #2A3F54;
}

	.container {
		width: 500px;
    height: 100%;
    top: 0%;
    margin: 6% auto;
    background-color: #182938;
    position: relative;
	}

.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #164f6b!important;
    text-align: center;
    background-color: #152633!important;
    border: 1px solid #133531!important;
    border-radius: 4px !important;
}
.form-group {
    margin-bottom: 10px !important;
}
</style>
<style>
div#myDiv {
    -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(60deg); /* Safari */
    transform: rotate(180deg); /* Standard syntax */
}
/*
  Hide radio button (the round disc)
  we will use just the label to create pushbutton effect
*/
input[type=radio] {
    display:none; 
    margin:10px;
}

/*
  Change the look'n'feel of labels (which are adjacent to radiobuttons).
  Add some margin, padding to label
*/
input[type=radio] + label {
    display:inline-block;
    margin:-2px;
    padding: 4px 12px;
    background-color: #e7e7e7;
    border-color: #ddd;
}
/*
 Change background color for label next to checked radio button
 to make it look like highlighted button
*/
input[type=radio]:checked + label { 
   background-image: none;
    background-color:#d0d0d0;
}
input[type=radio] {
		display:none;
	}

	input[type=radio] + label {
		display:inline-block;
		margin:-2px;
		padding: 4px 12px;
		margin-bottom: 0;
		font-size: 14px;
		line-height: 20px;
		color: #333;
		text-align: center;
		text-shadow: 0 1px 1px rgba(255,255,255,0.75);
		vertical-align: middle;
		cursor: pointer;
		background-color: #f5f5f5;
		background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
		background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
		background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
		background-image: -o-linear-gradient(top,#fff,#e6e6e6);
		background-image: linear-gradient(to bottom,#fff,#e6e6e6);
		background-repeat: repeat-x;
		border: 1px solid #ccc;
		border-color: #e6e6e6 #e6e6e6 #bfbfbf;
		border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
		border-bottom-color: #b3b3b3;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffe6e6e6',GradientType=0);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
		-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
		-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
		box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
	}

	input[type=radio]:checked + label {
		   background-image: none;
		outline: 0;
		-webkit-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
		-moz-box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
		box-shadow: inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);
			background-color:#e0e0e0;
	}
	.icon-refresh {
    background-position: -240px -24px;
}
.icon-ok {
    background-position: -288px 0;
}
[class^="icon-"], [class*=" icon-"] {
    display: inline-block;
    width: 14px;
    height: 14px;
    margin-top: 1px;
    line-height: 14px;
    vertical-align: text-top;
    background-image: url(../login/img/glyphicons-halflings.png);
    
    background-repeat: no-repeat;
}
</style>
</body>
</html>
<?php ob_end_flush(); ?>