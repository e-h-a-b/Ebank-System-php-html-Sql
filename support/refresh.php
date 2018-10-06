<?php
 
	require_once 'dbconnect.php';
	 
	
//On page 1
//$_SESSION['varname'] = $var_value;
//On page 2
//$var_value = $_SESSION['varname'];
	//On page 2
$new = $_SESSION['new'];

$idper= trim($_POST['idpers']);
		        $idper= strip_tags($idper);
		        $idper= htmlspecialchars($idper);

	?>
	<?php	
	$qlll =mysql_query("SELECT message,fryou FROM support WHERE id='$new'");
       	
	while($rpp = mysql_fetch_array($qlll)){
		$message=$rpp['message']; //اسم المشروع
		$you=$rpp['fryou'];
		if ($you == 1){
		?>
			<div class="msg_b"><?php echo $message; ?></div>
			<?php
		}else{
			?>
			<div class="msg_a"><?php echo $message; ?></div>
			 <?php
	}}
			 ?>