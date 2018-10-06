<?php
include('config.php');
if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
           <title>البنك الالكترونى المصري|e-ebank </title>

    <!-- Bootstrap -->
    <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
		
		<script>
	(function() {
    var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'shortcut icon';
    link.href = 'http://www.ebank.esy.es/login/m.ico';
    document.getElementsByTagName('head')[0].appendChild(link);
}());
	</script>
		
    </head>
    <body>
	
	<div class="col-md-3 left_col" style="right: 0px;left: 87.5%;">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"  ><span>البنك الالكتروني </span> <img src="https://3.bp.blogspot.com/-pr0fqnXp9m8/WXSmGyR0y3I/AAAAAAAAAYw/HXpnsjlKUpQjD2aAf8LOazJJABfcHimQACLcBGAs/s1600/cc.gif" alt="Avatar" style="max-width:100px;max-height:100px;margin-right: 0px;width: 55px;"></a>
            </div>

    <div id="flb-lightbox" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 1000; box-sizing: content-box; display: none;">
<div id="flb-lightbox-background" style="width: 100%; height: 100%; background-color: #000; opacity:0.8; box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"></div><div id="flb-lightbox-content" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background: none; text-align: center; box-sizing: content-box; display: none;"><img id="flb-close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABBJREFUeNpi+P//PwNAgAEACPwC/tuiTRYAAAAASUVORK5CYII=" width="25px" height="25px" alt="Close" style="margin-top: 73.5px; margin-left: 475px;box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"><br><img src="x-demo-images/1.gif" id="flb-lightbox-image" style="border: 10px solid rgb(255, 255, 255); box-sizing: content-box; width: 0px; height: 430px; opacity: 0; display: inline-block;"></div><div id="flb-load" style="position: fixed; top: 40%; left: 0px; width: 100%; text-align: center; font-size: 14px; color: #fff; opacity: 0.3; box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"></div><div id="flb-load2" style="position: fixed; top: 40%; left: 0px; width: 100%; text-align: center; font-size: 14px; color: #fff; opacity: 0.3;"></div></div>
          <br>
            <div class="clearfix"></div>

             <!-- menu profile quick info -->
            <div class="profile" style="width: 230px;">

     
              <div class="profile_pic">
              <img src="./Gentallela Alela! __files/img.jpg" alt="..." class="img-circle profile_img" style="height: 102px;margin-top: 0px;width: 100px;">
			  </div>
              <div class="profile_info">
                <span>مرحبا,</span>
                <h2>ايهاب مجدى</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br>
 </div>
</div>
   
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
<?php
//We check if the form has been sent
if(isset($_POST['usn'], $_POST['pass'], $_POST['passv'], $_POST['ema'], $_POST['ava']) and $_POST['usn']!='')
{
	//We remove slashes depending on the configuration
	if(get_magic_quotes_gpc())
	{
		$_POST['usn'] = stripslashes($_POST['usn']);
		$_POST['pass'] = stripslashes($_POST['pass']);
		$_POST['passv'] = stripslashes($_POST['passv']);
		$_POST['ema'] = stripslashes($_POST['ema']);
		$_POST['ava'] = stripslashes($_POST['ava']);
	}
	//We check if the two passwords are identical
	if($_POST['pass']==$_POST['passv'])
	{
		//We check if the password has 6 or more characters
		if(strlen($_POST['pass'])>=6)
		{
			//We check if the email form is valid
			if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',$_POST['ema']))
			{
				//We protect the variables
				$username = mysql_real_escape_string($_POST['usn']);
				$password = mysql_real_escape_string($_POST['pass']);
				$email = mysql_real_escape_string($_POST['ema']);
				$avatar = mysql_real_escape_string($_POST['ava']);
				//We check if there is no other user using the same username
				$dn = mysql_num_rows(mysql_query('select userId from users where userName="'.$username.'"'));
				if($dn==0)
				{
					//We count the number of users to give an ID to this one
					$dn2 = mysql_num_rows(mysql_query('select userId from users'));
					$id = $dn2+1;
					//We save the informations to the databse
					if(mysql_query('insert into users(userId, userName, userPass, userEmail, userpic, date_sign) values ('.$id.', "'.$username.'", "'.$password.'", "'.$email.'", "'.$avatar.'", "'.time().'")'))
					{
						//We dont display the form
						$form = false;
?>
<div class="message">You have successfuly been signed up. You can log in.<br />
<a href="connexion.php">Log in</a></div>
<?php
					}
					else
					{
						//Otherwise, we say that an error occured
						$form = true;
						$message = 'An error occurred while signing up.';
					}
				}
				else
				{
					//Otherwise, we say the username is not available
					$form = true;
					$message = 'The username you want to use is not available, please choose another one.';
				}
			}
			else
			{
				//Otherwise, we say the email is not valid
				$form = true;
				$message = 'The email you entered is not valid.';
			}
		}
		else
		{
			//Otherwise, we say the password is too short
			$form = true;
			$message = 'Your password must contain at least 6 characters.';
		}
	}
	else
	{
		//Otherwise, we say the passwords are not identical
		$form = true;
		$message = 'The passwords you entered are not identical.';
	}
}
else
{
	$form = true;
}
if($form)
{
	//We display a message if necessary
	if(isset($message))
	{
		echo '<div class="message">'.$message.'</div>';
	}
	//We display the form
?>
<div class="content">
    <form action="sign_up.php" method="post">
        Please fill the following form to sign up:<br />
        <div class="center">
            <label for="usn">Username</label><input type="text" name="usn" value="<?php if(isset($_POST['usn'])){echo htmlentities($_POST['usn'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="pass">Password<span class="small">(6 characters min.)</span></label><input type="password" name="pass" /><br />
            <label for="passv">Password<span class="small">(verification)</span></label><input type="password" name="passv" /><br />
            <label for="ema">Email</label><input type="text" name="ema" value="<?php if(isset($_POST['ema'])){echo htmlentities($_POST['ema'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="ava">Avatar<span class="small">(optional)</span></label><input type="text" name="ava" value="<?php if(isset($_POST['ava'])){echo htmlentities($_POST['ava'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <input type="submit" value="Sign up" />
		</div>
    </form>
</div>
<?php
}
?>
	<!-- jQuery -->
    <script async="" src="http://ebank.esy.es/login/Gentallela Alela! __files/analytics.js.download"></script>
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
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/custom.min.js.download"></script>
	<script src="http://ebank.esy.es/login/Gentallela%20Alela!%20__files/codepg.js"></script>

	</body>
</html>