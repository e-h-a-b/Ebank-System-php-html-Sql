     <?php  
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	
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
?>
  <?php 
  $table=mysql_query('SELECT * FROM `add`');
  while($row1=mysql_fetch_array($table))
  {
	  $project=$row1['project'];
	  $jobs=$row1['jobs'];
	  $benfit=$row1['benfit'];
	 
	  
  ?>
 
  <?php } ?>
  
<html lang="en" class=" "><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>البنك الالكترونى المصري|e-ebank </title>
      <!-- Bootstrap -->
    <link href="./Gentallela Alela! __files/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./Gentallela Alela! __files/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="./Gentallela Alela! __files/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="./Gentallela Alela! __files/jquery-jvectormap-2.0.3.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./Gentallela Alela! __files/custom.min.css" rel="stylesheet">
	
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
<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
<!--
<div class="cc_banner-wrapper "><div class="cc_banner cc_container cc_container--open"><a href="#null" data-cc-event="click:dismiss" target="_blank" class="cc_btn cc_btn_accept_all">Got it!</a><p class="cc_message">This website uses cookies to ensure you get the best experience on our website <a data-cc-if="options.link" target="_self" class="cc_more_info" href="http://www.jqueryscript.net/privacy/">More info</a></p><a class="cc_logo" target="_blank" href="http://silktide.com/cookieconsent">Cookie Consent plugin for the EU cookie law</a></div></div>
<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
    $('.report a').click(function(){
        var id = $(this).attr("id");
        $('.detail').slideUp('slow');
        $('.detail').slideDown('slow');
    });
});
</script>

<style>
    .detail{display: none;}    
</style>
<div id="reports">

    <div class="report">
        <a id="1" href="#">click to view full credit report details</a>
        <div class="detail" id="detail_1">
            Here are details related to report # 1
        </div>
    </div>
</div>-->
 
 		<?php $_GET['id'] = 11;
       include('visitor.php');
	   ?>
 
  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">

     <?php include('Sidemenu.php'); ?>
 
		 <!-- top navigation -->
         <?php include('topmenu.php');?>
         <!-- /top navigation -->
        <!-- footer content -->
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 974px;">
		
<?php include('stripuser.php'); ?>
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
		
          <div class="">

            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>&#1575;&#1604;&#1575;&#1593;&#1590;&#1575;&#1569; &#1575;&#1604;&#1605;&#1588;&#1578;&#1585;&#1603;&#1610;&#1606;<small>&#1569;</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: block;">



<div class="bs-docs-section">
                      <h1 id="glyphicons" class="page-header">الاصدقـــاء</h1>

                      <h2 id="glyphicons-glyphs">الاصدق5ـــاء</h2>
                      
                      <div class="bs-glyphicons">
                        <ul class="bs-glyphicons-list">

                          

                          

                          

                          

                          

                          

                          

                          

                          

                          

                               
                         <?php 
						 	// select loggedin users detail
							$us=$_SESSION['user'];
	$rf=mysql_query('SELECT * FROM Ferinds WHERE user1="'.$us.'" ');
	
	while($userfr=mysql_fetch_array($rf)){
	
	if($userfr['user1ac']==1 && $userfr['user2ac']==1){
	$gt=$userfr['user2'];
    $infa=mysql_query('SELECT * FROM users WHERE userId="'.$gt.'"');

 while($getin=mysql_fetch_array($infa))
 {
       $crd=$getin['userpic'];
	$pass=$getin['userName'];
	
	  if($getin['pers']=="on"){
		  $st="متصل الان";
	  }else{
		  $st="غير متصل";
		  
	  }
	  
		  
  ?>

						<li>
						<span><?php echo '<img src="'.htmlentities($getin['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:60px;max-height:60px;" />'; ?></span>
                           
                            <span class="glyphicon-class"><?php echo  htmlentities($getin['userName'], ENT_QUOTES, 'UTF-8'); ?></span>
							 <span ><?php echo  $st; ?></span>
                            <button type="button" class="btn btn-info" ><a href="http://www.ebank.esy.es/<?php echo  htmlentities($getin['userName'], ENT_QUOTES, 'UTF-8'); ?>">معلومات</a></button>                         
</li>
	<?php }} }?>

                          
     <?php 
						 	// select loggedin users detail
							$us=$_SESSION['user'];
	$rf=mysql_query('SELECT * FROM Ferinds WHERE user2="'.$us.'" ');
	
	while($userfr=mysql_fetch_array($rf)){
	
	if($userfr['user1ac']==1 && $userfr['user2ac']==1){
	$gt=$userfr['user1'];
    $infa=mysql_query('SELECT * FROM users WHERE userId="'.$gt.'"');

 while($getin=mysql_fetch_array($infa))
 {
       $crd=$getin['userpic'];
	$pass=$getin['userName'];
	  if($getin['pers']=="on"){
		  $st="متصل الان";
	  }else{
		  $st="غير متصل";
		  
	  }
	  
  ?>

						<li>
						<span><?php echo '<img src="'.htmlentities($getin['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:60px;max-height:60px;" />'; ?></span>
                           
                            <span class="glyphicon-class"><?php echo  htmlentities($getin['userName'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <span ><?php echo  $st; ?></span>
							<button type="button" class="btn btn-info" ><a href="http://www.ebank.esy.es/<?php echo  htmlentities($getin['userName'], ENT_QUOTES, 'UTF-8'); ?>">معلومات</a></button>                         
</li>
	<?php }} }?>
                          

                          

                          



                            




                        </ul>
                      </div>

                      
                    </div> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
            <!-- footer content 
        <footer style="margin-left: 0px;margin-right: 230px;">
          <div class="pull-right">
            البنك الالكترونى المصري|e-ebank  <a href="">السميز بالكامل منColorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
         /footer content -->
        <!-- /footer content -->
      </div>
    </div>
		
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
	.bs-glyphicons li {
     
    margin: 2px 2px !important;
}
  </style>
	<!--scroller -->

  </div>
 
	
	  <?php
			include('menu.php');
		?>
	 
<!--Query -->
    <script async="" src="./Gentallela Alela! __files/analytics.js.download"></script><script src="./Gentallela Alela! __files/jquery.min.js.download"></script>
    <!-- Bootstrap -->
    <script src="./Gentallela Alela! __files/bootstrap.min.js.download"></script>
    <!-- FastClick -->
    <script src="./Gentallela Alela! __files/fastclick.js.download"></script>
    <!-- NProgress -->
    <script src="./Gentallela Alela! __files/nprogress.js.download"></script>
    <!-- Chart.js -->
    <script src="./Gentallela Alela! __files/Chart.min.js.download"></script>
    <!-- gauge.js -->
    <script src="./Gentallela Alela! __files/gauge.min.js.download"></script>
    <!-- bootstrap-progressbar -->
    <script src="./Gentallela Alela! __files/bootstrap-progressbar.min.js.download"></script>
    <!-- iCheck -->
    <script src="./Gentallela Alela! __files/icheck.min.js.download"></script>
    <!-- Skycons -->
    <script src="./Gentallela Alela! __files/skycons.js.download"></script>
    <!-- Flot -->
    <script src="./Gentallela Alela! __files/jquery.flot.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery.flot.pie.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery.flot.time.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery.flot.stack.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery.flot.resize.js.download"></script>
    <!-- Flot plugins -->
    <script src="./Gentallela Alela! __files/jquery.flot.orderBars.js.download"></script>
    <script src="./Gentallela Alela! __files/date.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery.flot.spline.js.download"></script>
    <script src="./Gentallela Alela! __files/curvedLines.js.download"></script>
    <!-- jVectorMap -->
    <script src="./Gentallela Alela! __files/jquery-jvectormap-2.0.3.min.js.download"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="./Gentallela Alela! __files/moment.min.js.download"></script>
    <script src="./Gentallela Alela! __files/daterangepicker.js.download"></script>

    <!-- Custom Theme Scripts -->
    <script src="./Gentallela Alela! __files/custom.min.js.download"></script>
     <script src="./Gentallela Alela! __files/jquery-jvectormap-world-mill-en.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery-jvectormap-us-aea-en.js.download"></script>
    <script src="./Gentallela Alela! __files/gdp-data.js.download"></script>

		<script  src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>

	
	

  
</body>

	


</html>