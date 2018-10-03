 <?php
	error_reporting( ~E_NOTICE ); // avoid notice
	require_once 'Page/dbconfig.php';
	if(isset($_POST['btnsave']))
	{
		$Email = $_POST['Email'];// user name
		$password = $_POST['password'];// user email
		$name = $_POST['name'];//
        $city= $_POST['city'];//
	 
		
		if(empty($Email)){
			$errMSG = "رجاءا كتابة الايميل";
		}
		else if(empty($password)){
			$errMSG = "رجاءا كتابة الباسورد";
		}
		else if(empty($name)){
			$errMSG = "رجاءا كتابة الاسم";
		}
		 else if(empty($city)){
			$errMSG = "رجاءا كتابة المحافظة";
		}
		 
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO Developer(Email,password,Name,city) VALUES(:Email, :password, :Name , :city)');
			$stmt->bindParam(':Email',$Email);
			$stmt->bindParam(':password',$password);
			$stmt->bindParam(':Name',$name);
			$stmt->bindParam(':city',$city);
			 
			
			if($stmt->execute())
			{
				$successMSG = "تم تسجيل بياناتك بنجاح ستقل خلال  10 ثوانى الى صفحة المطورين";
				header("refresh:10;Page/h.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
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
 
<h1>ـ مطور موقع ايبنك (المالك والمطور إيهاب مجدي)ـ</h1>
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
<tr>
<td>تأكيد الباسورد <mandatory>*</mandatory></td>
<td>
<input type="password" name="pass2">
<span id="js_error3">
</span>
</td>
</tr>
<tr>
<td>الاسم <mandatory>*</mandatory></td>
<td>
<input type="text" name="name" value="<?php echo $name; ?>">
 <span id="js_error_n">
 </span>
 </td>
</tr>
<tr>
<td>المحافطة</td>
<td>
<input type="text" name="city" value="<?php echo $city; ?>"></td>
</tr>

<tr>
<td>
</td>
<td>
<input type="submit" name="btnsave" value="تسجيل">
</td>
</tr>
<tr>
<td>
<a href="http://www.ebank.esy.es/Login.php">لدخول</a>
</td>
</tr>
</tbody></table>

</div>
</form>
<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
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