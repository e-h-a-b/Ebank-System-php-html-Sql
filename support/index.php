<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="facivon.ico">

    <title>Facebook like chat</title>
    <link href="style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="script.js"></script>
  <style type="text/css">:root #ad-container
{display:none !important;}</style></head>
  <body style="">
  <?php
  require_once 'dbconnect.php';
 $qlll =mysql_query("SELECT * FROM support ");
       $rpp = mysql_fetch_array($qlll);
	   
$result = mysql_query("SELECT id FROM supportcustom");
$rows = mysql_num_rows($result);
 $new=$rows+1;
 $mess="Hello, Can I help you !!! ";
 		mysql_query("INSERT INTO `supportcustom` (`me`, `id`) VALUES ('0', '$new')");
        mysql_query("INSERT INTO `support` (`id`, `message`, `time`, `you`, `me`) VALUES ('0', '$mess', '00:00', '$new', '0')");
 //On page 1
$_SESSION['new'] = $new;


 ?>
  
 
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
 
<div class="msg_box" style="right: 10px;display: block;">
	<div class="msg_head" >Support </div>
	<div class="msg_wrap" style="display: none;">
		<div class="msg_body" id="tableHolder">
 					
			<div class="msg_push"></div>
		</div>
	<div class="msg_footer">
	<form method="post" action="add.php" autocomplete="off">

	<textarea class="msg_input" rows="4" id="idpers" name="idpers"  value="<?php if(isset($_POST['idpers'])){echo htmlentities($_POST['idpers'], ENT_QUOTES, 'UTF-8');} ?>"></textarea></div>
</form>
	</div>
</div>


</body></html>