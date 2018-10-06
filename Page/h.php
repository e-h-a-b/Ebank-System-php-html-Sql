<? 
session_start(); 
?> 
<?php
 
	error_reporting( ~E_NOTICE ); // avoid notice 
	require_once 'dbconfig.php';
 
	// if session is not set this will redirect to login page
	if(!isset($_SESSION['users'])) {
		header("Location: http://www.ebank.esy.es/Login.php");
		exit;
	} 
//	 if(time() - $_SESSION['user'] > 1800) {
 //   $_SESSION['user'] = time(); // add this line
  //  header('Location: http://www.ebank.esy.es/Login.php');
//}
	if(isset($_POST['btnb']))
	{
		unset($_SESSION['users']);
		session_unset();
		session_destroy();
		
		header("Location: http://www.ebank.esy.es/Login.php");
		exit;
	}
	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email
		
		$mob = $_POST['mobile'];//

        $fb= $_POST['facebook'];//
	
        $tw= $_POST['tweeter'];//
		$yb= $_POST['youtube'];//
		$ggg= $_POST['google'];//
		$te= $_POST['telephone'];//
		
		
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($username)){
			$errMSG = "Please Enter Username.";
		}
		else if(empty($userjob)){
			$errMSG = "Please Enter Your Job Work.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$date = date("F j, Y, g:i a");
			$upload_dir = 'Page/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif' ,'html','php','css','dwg','txt'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO tbl_users(userName,userProfession,userPic,date,FB,TW,YB,GGG,MOB,TEL) VALUES(:uname, :ujob, :upic , :udate, :uFB, :uTW, :uYB, :uGGG, :uMOB, :uTEL)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':udate',$date);
			
			$stmt->bindParam(':uFB',$fb);
			$stmt->bindParam(':uTW',$tw);
			$stmt->bindParam(':uYB',$yb);
			$stmt->bindParam(':uGGG',$ggg);
			$stmt->bindParam(':uMOB',$mob);
			$stmt->bindParam(':uTEL',$te);
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:5;h.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT userPic FROM tbl_users WHERE userID =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("Page/".$imgRow['userPic']);
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE userID =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: h.php");
	}
	
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>مطـــور</title>
 
<link rel="shortcut icon" type="image/x-icon" href=" ">
</head>
<body style="
    background-color: #ffffff;
">
<script>
	(function() {
    var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'shortcut icon';
    link.href = 'http://www.ebank.esy.es/login/m.ico';
    document.getElementsByTagName('head')[0].appendChild(link);
}());
</script>

<p style="text-align:  center;">      Hello Mr.Ms /  <?php    echo    $_SESSION['users'];?> - Total upload : 0 file <br>
	 <a href="https://www.youtube.com/watch?v=DI6OrUrF9mY"  style="text-align:  center;">عدد المبرمجين 7 المرحلة القادمة بعد التعديلات اضغط هنا</a><br>
	 <a href="https://www.youtube.com/watch?v=NGIJDM2Xf4w"  style="text-align:  center;">كما ايضا نامل بدخول تلك التكنولوجيا</a><br>
	 <a href="https://www.youtube.com/watch?v=BzspUyIGnr8"  style="text-align:  center;">front endمرحلة فى غاية التقدم </a><br>
	 <a href="https://www.youtube.com/watch?v=VKMYuZN_tCs"  style="text-align:  center;">intro </a><br>
	 <a href="https://codepen.io/sdras/pen/JdJgrB"  style="text-align:  center;">مثال على التكنولوجيا القادمة للموقع اضغط هنا </a>
	 </p>
<!-- Trigger/Open The Modal -->
	<form method="post" enctype="multipart/form-data" style="margin-bottom: 0px;">
<button type="submit" class="button" name="btnb" value="<?php $_SESSION['users']=""; ?>" class="btn btn-default"> تسجيل خروج</button></form>
<button id="myBtn" class="button" >Upload file</button>
<button id="myBtn0" class="button" onclick="window.location.href='http://www.ebank.esy.es/urpage.php'">Choice Your Page</button>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     
	<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    <td><input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="user_name" placeholder="&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1576;&#1585;&#1605;&#1580;" value="<?php echo $username; ?>" /></td>
   <td><label class="control-label">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1576;&#1585;&#1605;&#1580;</label></td>
        
   </tr>
    
    <tr>
    	<td><input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="user_job" placeholder="&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1605;&#1591;&#1604;&#1608;&#1576;&#1577;" value="<?php echo $userjob; ?>" /></td>
		<td><label class="control-label">&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1605;&#1591;&#1604;&#1608;&#1576;&#1577;</label></td>
    </tr>
    	
    <tr>
    	
        <td>
		<input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="mobile" placeholder="&#1605;&#1608;&#1576;&#1610;&#1604;" value="<?php echo $mob; ?>" />
        <input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="facebook" placeholder="&#1601;&#1610;&#1587; &#1576;&#1608;&#1603;" value="<?php echo $fb; ?>" />
        <input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="tweeter" placeholder="&#1578;&#1608;&#1610;&#1578;&#1585;" value="<?php echo $tw; ?>" />
		<input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="youtube" placeholder="&#1610;&#1608;&#1578;&#1610;&#1608;&#1576;" value="<?php echo $yb; ?>" />
		<input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="google" placeholder="&#1580;&#1608;&#1580;&#1604; &#1576;&#1604;&#1587;" value="<?php echo $ggg; ?>" />
		<input style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 1px solid #dadada;" type="text" name="telephone" placeholder="&#1575;&#1604;&#1607;&#1575;&#1578;&#1601; &#1575;&#1604;&#1605;&#1606;&#1586;&#1604;&#1610;" value="<?php echo $te; ?>" />
		</td>
		<td><label class="control-label">&#1575;&#1604;&#1578;&#1608;&#1589;&#1604; &#1605;&#1593; &#1575;&#1604;&#1605;&#1576;&#1585;&#1605;&#1580;</label></td>
    </tr>
    
    <tr>
        <td><input class="input-group" type="file" name="user_image" accept="Page/*" /></td>
		<td><label class="control-label">&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1605;&#1576;&#1585;&#1605;&#1580;</label></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; &#1578;&#1587;&#1580;&#1610;&#1600;&#1600;&#1600;&#1600;&#1604;
        </button>
        </td>
    </tr>
     
    </table>
    
</form>
  </div>

</div>

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
     background: #348393;
     webkit-box-shadow: inset 0 0 6px #2a3f54; 
    }
    ::-webkit-scrollbar-thumb:window-inactive {
      background: #3f3f3f; 
    }
	.button {
    background-color: #358394;
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
  </style>
	<!--scroller -->

<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid #e0e0e0;
    border-collapse: collapse;
	align : rtl
}
th, td {
    padding: 5px;
    text-align: center;
}
table#t01 tr:nth-child(even) {
    background-color: #ffffff;
}
table#t01 tr:nth-child(odd) {
   background-color:#e0e0e0;
}
table#t01 th {
    background-color: #348393;
    color: white;

}
div.scroll {
    
    width: 100%;
    height: 100%;
    overflow: scroll;
}


</style>
<div class="scroll" style="background-color: #ffffff;">
<table id="t01" align="center" style="margin: 0px auto;">
  <tbody center dir="ltr" ><tr center>
    <th >&#1604;&#1604;&#1575;&#1578;&#1589;&#1575;&#1604; &#1576;&#1575;&#1604;&#1605;&#1576;&#1585;&#1605;&#1580;</th>
    <th >&#1593;&#1583;&#1583; &#1575;&#1604;&#1606;&#1602;&#1575;&#1591;</th> 
    <th >&#1602;&#1576;&#1608;&#1604;/&#1585;&#1601;&#1590;</th>
	<th >&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1605;&#1576;&#1585;&#1605;&#1580;</th>
	<th >&#1575;&#1604;&#1589;&#1601;&#1581;&#1577; &#1575;&#1604;&#1605;&#1591;&#1604;&#1608;&#1576;&#1577;</th>
	<th >&#1575;&#1604;&#1578;&#1575;&#1585;&#1610;&#1582;</th>
	<th >&#1575;&#1604;&#1605;&#1576;&#1585;&#1605;&#1580;</th>
	<th >&#1578;&#1593;&#1583;&#1610;&#1604;</th>
	<th >&#1581;&#1584;&#1601; </th>
  </tr>

  <?php
	
	$stmt = $DB_con->prepare('SELECT userID, userName, userProfession, userPic , date , FB , TW , YB , GGG , MOB , TEL FROM tbl_users ORDER BY userID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
  <tr>
    <td>
	<a class="btn btn-info" title="<?php echo $row['FB']; ?>" href="<?php echo $row['FB']; ?>">FB</a>
	-
	<a class="btn btn-info" title="<?php echo $row['TW']; ?>" href="<?php echo $row['TW']; ?>">TW</a>
	-
	<a class="btn btn-info" title="<?php echo $row['YB']; ?>" href="<?php echo $row['YB']; ?>">YB</a>
	-
	<a class="btn btn-info" title="<?php echo $row['GGG']; ?>" href="<?php echo $row['GGG']; ?>">G+</a>
	-
	<a class="btn btn-info" title="<?php echo $row['MOB']; ?>">TEL</a>
	-
	<a class="btn btn-info" title="<?php echo $row['TEL']; ?>">MOB</a>
	</td>
    
    <td>0000</td>
	<td> &#1600;&#1600;&#1600;&#1600; </td>
	<td><a class="btn btn-info" href="http://www.ebank.esy.es/Page/Page/<?php echo $row['userPic']; ?>"><?php echo $row['userPic']; ?></a></td>
	<td><a class="btn btn-info" href="<?php echo $row['userProfession']; ?>"><?php echo $row['userProfession']; ?></a></td>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['userName']; ?></td>
	<?php if ($row['userNmae']=$_SESSION['users']) ?>
	<td><a class="btn btn-info" href="editform.php?edit_id=<?php echo $row['userID']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> &#1578;&#1593;&#1583;&#1610;&#1604;</a></td>
	<td><!--<a class="btn btn-danger" href="?delete_id=<?php echo $row['userID']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> &#1581;&#1584;&#1601;</a>--></td>
	 
				
				
  </tr>
 <?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
</tbody></table>
</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>