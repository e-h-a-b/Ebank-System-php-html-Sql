<? 
ob_start();
	session_start();
?> 
<?php
 
	 
	require_once 'config.php';
	 
	 
	// it will never let you open index(login) page if session is set
	if (isset($_SESSION['users'])!="") {
		header("Location: /Page/h.php");
	    exit;
	} 
	
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
	// prevent sql injections/ clear user invalid inputs
		$Email =  $_POST['Email'] ;
	 
		
		$password =  $_POST['password'] ;
	 
		// prevent sql injections / clear user invalid inputs
		
		if(empty($Email)){
			$error = true;
			$emailError = "من فضلك ادخل الايميل الخاص بك";
		} else if ( !filter_var($Email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "من فضلك ادخل الايميل الصحيح";
		}
		
		if(empty($password)){
			$error = true;
			$passError = "من فضلك ادخل الباسورد.";
		}



		// if there's no error, continue to login
		if (!$error) {
			
			 
			$res=mysql_query("SELECT Email, password, Name FROM Developer WHERE Email='$Email'");
			$row=mysql_fetch_array($res);
			$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
			
			$mmm=$row['Email'];
			if( $count == 1 && $row['password']==$password ) {
				 $_SESSION['users']=$mmm;
		 
				header("Location: Page/h.php");
			} else {
				$errMSG = "خطاء بادخال البيانات ,اعد المحاولة";
			}
				
		}
		
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>مطـــور</title>
 
<link rel="shortcut icon" type="image/x-icon" href=" ">
</head>
<body>
 

<div id="codeincode_content_wrapper">
<div id="codeincode_content" style="direction: rtl;">
 
<h1>لدخول الموقع للتطوير</h1>
<form method="post" enctype="multipart/form-data" class="form-horizontal">
<div id="table_cover">
<table width="700" align="center">
<tbody><tr>
<td width="150">الايميل <mandatory>*</mandatory></td>
<td><input type="text" name="Email" value="<?php echo $Email; ?>" ><span id="js_error"></span></td>
</tr>
<tr><td>الباسورد <mandatory>*</mandatory></td><td>
<input type="password" name="password"><span id="<?php echo $password; ?>"></span></td>
</tr>
 
 
 

<tr><td></td><td><input type="submit" name="btn-login" value="تسجيل"></td></tr>
<tr>
<td>
<a href="http://www.ebank.esy.es/Developer.php">تسجيل الدخول</a>
</td>
</tr>
</tbody></table>

</div>
</form>
<?php
	if(isset($emailError)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $emailError; ?></strong>
            </div>
            <?php
	}
	else if(isset($passError)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $passError; ?></strong>
        </div>
    
	<?php
	}
	?> 
</td>
</tr>
</tbody>
</table> <!-- end of content wrapper -->
</div> <!-- end of content -->
</div> <!-- end of content wrapper -->
<style>
#button_link
{
background: #bd0100;
padding: 5px 10px;
margin: 10px;
color: #fff;
float: left;
}
#button_link_ar
{
background: #bd0100;
padding: 0px 10px;
margin: 10px;
color: #fff;
float: right;
}
#button_link_hover
{
color: #bd0100;
background: #f0f0f0;
padding: 5px 10px;
margin: 10px;
float: left;
}
#button_link_ar_hover
{
color: #bd0100;
background: #f0f0f0;
padding: 0px 10px;
margin: 10px;
float: right;
}
#button_link:hover, #button_link_ar:hover
{
color: #bd0100;
background: #f0f0f0;
}
input[type="submit"]
{
border: 0px;
padding: 5px 15px;
text-align: center;
color: #fff;
background: #bd0100;
cursor: pointer;
border-radius: 3px;
transition: all ease-in-out .3s;
	-ms-transition: all ease-in-out .3s;
}
input[type="submit"]:hover
{
background: #4a4a4a;
}
input[type="text"], input[type="password"]
{
padding: 5px;
border: 1px solid #ccc;
background: #fff;
width: 220px;
}
select
{
padding: 5px;
border: 1px solid #ccc;
background: #fff;
width: 220px;
}
h1
{
text-align:center;
font: bold 23px Comic Sans MS;
width: auto;
margin: 5px;
padding: 0 0 0 25px;
color: #28a5a0;
background: url(images/target.png) no-repeat left;
margin: 0 0 20px 0;
}
h1.arabic
{
margin: 8px;
padding: 0 28px 0 0;
font: bold 21px goth;
background: url(images/target.png) no-repeat right;
}
h2,h3,h4
{
color: #bd0100;
margin: 5px 20px;
}
body {
	margin: 0;
	padding: 0;
	font-family: Arial;
	font-size: 13px;
	color: #5e5e5e;
	background: #f9f9f9 url(images/body.png);
}
body.arabic {
	margin: 0;
	padding: 0;
	font-family: goth;
	font-size: 13px;
	color: #5e5e5e;
	background: #f9f9f9 url(images/body.png);
}
#table_cover
{
margin-bottom: 10px;
padding: 20px;
border: 1px solid #f0f0f0;
background: #f9f9f9;
}
textarea
{
padding: 5px;
border: 1px solid #ccc;
background: #fff;
}
mandatory
{
font: 12px arial;
color: #bd0100;
}
form table tr
{
height: 40px;
font-weight: bold;
}
table.listing {
	width: 100%;
	font-size: 12px;
	color: #bd0100;
	border-collapse:collapse;
	border-spacing:0;
	background:#fff;
}
table.listing tr {
	border-bottom: 1px solid #f8f8f8;
	line-height: 15px;
}
table.listing tr:hover {
	background: #f0f0f0;
}
table.listing tr td {
	padding: 4px;
	border-left: 1px solid #f8f8f8;
	border-right: 1px solid #f8f8f8;
}
table.listing th {
	text-align:center;
	color: white;
	padding: 7px;
	font-size: 13px;
	border-left: 1px solid #bd0100;
	border-right: 1px solid #bd0100;
	background: #bd0100;
}
table.listing tr td a {
	font-size: inherit;
	color: inherit;
	text-decoration: none;
}
.alert{
	position: absolute;
    top: 5%;
	color:red;
	font: bold 15px Comic Sans MS;
    right: 50%;
}
</style>
  
 </body>
 </html>
 <?php ob_end_flush(); ?>