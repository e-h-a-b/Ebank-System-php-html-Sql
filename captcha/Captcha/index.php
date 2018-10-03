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
    <button type="submit" name="submit" class="btn btn-primary"><i class="icon-ok icon-large"></i> Submit</button>
    </div>
    </div>
    </form>
	
	
	<?php 
session_start();

if(isset($_POST['submit']))
{
	if(strcmp($_SESSION['code'], $_POST['code']) != 0)
	{
	?>
	<div class="span4">	
	<div class="alert alert-danger">The captcha code does not match!</div>
	</div>
	
<?php
}else{ ?>
<div class="span4">	
	<div class="alert alert-success">Code Match</div>
	</div>

<?php
}}
?>

</body>
</html>