<!DOCTYPE html>
<!-- saved from url=(0050)https://colorlib.com/polygon/gentelella/index.html -->
<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <!-- Meta, title, CSS, favicons, etc. -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
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
<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style.css">
<link rel="stylesheet" href="style1.css" type="text/css">
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
  <body class="nav-sm">
   
 		<?php include('visitor.php?id=17'); ?>
<div id="head">
		<?php
			include('head.php');
		?>
	</div>

    <div class="container body">
      <div class="main_container">
<?php include('Sidemenu.php'); ?>
         <!-- top navigation -->
         <?php include('topmenu.php');?>
         <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1732px; ">          <!-- top tiles -->
            <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> عدد الاعضاء</span><i class="fa fa-user"></i>
	
              <div class="count"><?php echo $totusers ?></div>
              <span class="count_bottom"> من الاسبوع الماضي </span><i class="green"> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top">رصيد البنك </span><i class="fa fa-clock-o"></i>
              <div class="count"><?php echo $totbalance ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top">عدد المشروعات </span><i class="fa fa-user"></i>
              <div class="count green"><?php echo $project ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> عدد الوظائف </span><i class="fa fa-user"></i>
              <div class="count"><?php echo $jobs ?></div>
              <span class="count_bottom"><i class="red"> من الاسبوع الماضي </span><i class="fa fa-sort-desc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> رصيدك </span><i class="fa fa-user"></i>
              <div class="count"><?php echo $userRow['Balance']; ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> أرباحك </span><i class="fa fa-user"></i>
              <div class="count"><?php echo $benfit ?></div>
              <span class="count_bottom"><i class="green"> من الاسبوع الماضي </span><i class="fa fa-sort-asc"></i> %0</i>
            </div>
          </div>
			
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New Partner Contracts Consultancy</h2>
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

                    <div class="row">

                      <p>Media gallery design emelents</p>

                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://ebank.esy.es/login/Gentallela%20Alela!%20__files/img.jpg" alt="image">
                            <div class="mask">
                              <p>Your Text</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Snow and Ice Incoming for the South</p>
                          </div>
                        </div>
                      </div>
					 
                    </div>
                  </div>

				  </div>
              </div>
            
          </div>
          <!-- /top tiles -->

		  
		  
		  
		  
		 
        <!-- /footer content -->
      </div>
    </div>

	
		  <?php
			include('menu.php');
		?>
	  <!-- jQuery -->
    <script async="" src="./Gentallela Alela! __files/analytics.js.download"></script>
	<script src="./Gentallela Alela! __files/jquery.min.js.download"></script>
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
    <script src="https://colorlib.com/polygon/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="https://colorlib.com/polygon/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<script src="https://colorlib.com/polygon/vendors/vendors/jquery/dist/jquery.min.js"></script>
<script src="https://colorlib.com/polygon/vendors/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/vendors/fastclick/lib/fastclick.js"></script>

<script src="https://colorlib.com/polygon/vendors/vendors/nprogress/nprogress.js"></script>

<script src="https://colorlib.com/polygon/vendors/build/js/custom.min.js"></script>
	<script  src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>




	
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
  <style>
  	/* Edit */
	.thumbnail .caption {
    padding: 9px;
    color: #0abfde !important;
}
.thumbnail { 
    background-color: #145b6f !important;
    border: 1px solid #3090c5 !important;
    
}
</style>
  </body>

</html>