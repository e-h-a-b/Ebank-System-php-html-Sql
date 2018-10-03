
<!-- saved from url=(0050)https://colorlib.com/polygon/gentelella/index.html -->
<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	include('config.php');
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
	 //ID-00/00/0000 00:00 PM-00.0000-00.0000-0#000-Price-Percentage
	 
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
	
	<script>
	var spaceFromTop = 1%;
   $('html,body').animate({ scrollTop: spaceFromTop }, 'slow', function () {});
       $("html, body").animate({ scrollTop: 0 }, 2000);  
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 </head>
  
 		<?php include('visitor.php?id=1'); ?>
 
  <body class="nav-sm">

    <div class="container body">
      <div class="main_container">
     <?php include('Sidemenu.php'); ?>
 
		 <!-- top navigation -->
         <?php include('topmenu.php');?>
         <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1732px; height: 1600px;">          <!-- top tiles -->
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
          
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" dir="rtl">
                    <h>&#1575;&#1606;&#1588;&#1575;&#1569; &#1605;&#1588;&#1585;&#1608;&#1593;<small>&#1585;&#1610; &#1575;&#1604;&#1575;&#1585;&#1590;&#1610; &#1575;&#1604;&#1586;&#1585;&#1575;&#1593;&#1610;&#1577;</small></h>
                    <ul class="nav navbar-left panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="http://ebank.esy.es/login/project.php#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="http://ebank.esy.es/login/project.php#">Settings 1</a>
                          </li>
                          <li><a href="http://ebank.esy.es/login/project.php#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                  <!-- Smart Wizard -->
                    <p dir="rtl">يمكنك استخدام الكيبورد  يمين ويسار او الضغط على المرحلة بعد روئيتها</p>
                    
					
					
					<div class="bs-glyphicons">
                    <div class="tab1" style="overflow: scroll;height: 550px;/* width: 300px; */width: 200px;right: 0px;padding: 0.01em 0px 0.01em 16px;height: 600.26px;overflow: auto;width: 25%;background-color: rgba(28, 56, 70, 0.62);position: absolute;z-index: 1;overflow: auto;width: 20%;left: 0px;top: 110px;">
 <ul class="bs-glyphicons-list">

                          

                          

                          

                          

                          

                          

                          

                          

                          

                          

                               
                         
						<li style="
    width: 105;
">
						<span><p style="/* max-width:60px; *//* max-height:60px; */text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">1</p></span>
                           
                            <span class="glyphicon-class">Product</span>
							 
                                                     
</li>
<li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">2</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">3</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">4</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">5</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">6</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">7</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">8</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 40%;margin-right: 50%;">9</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li>
<li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">11</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">12</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">13</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">14</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">15</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">16</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">17</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">18</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">19</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">20</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">21</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">22</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">23</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">24</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">25</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">26</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">27</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">28</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">29</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li><li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">30</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li>
<li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">31</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li>
<li style="
    width: 105;
">
<span>
<p style="text-size-adjust: 2020;font-size: 50;margin-left: 25%;margin-right: 50%;">32</p></span>
<span class="glyphicon-class">Product</span>                                                     
</li>
	
						
	
						
	
						
	
						
	
						
	
						
	
						
	
						
	
                          
                               

                          

                          



                            




                        </ul>
    </div> <div class="w3-container">
  

  

<div id="pro1" class="container" style="overflow: scroll; height: 600px; display: block;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع ري الاراضي</h1><h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

  </h1></div>
</div>
<div id="pro2" class="container" style="overflow: scroll; height: 600px; display: none;">
 <div class="" style="margin-left: 20%;">
                        <h1 style="text-align: center;">مشروع استصلاح الاراضي</h1><h1>
                       <table style="width:800px">
 
  <tbody><tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي العرض</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>احداثي الطول</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>المحافظة</td>
  </tr>
  <tr>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تاريخ المشروع</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>عدد العاملين</td>
    <td><input id="codn" type="text" name="codn" style="background: #188586;border: 1px solid #3aeeff;"></td>
    <td>تكلفة المشروع</td>
  </tr>
    
</tbody></table>

                      
					  
					  

<button type="button" onclick="alert('Hello world!')" style="margin-left: 200px;width: 316px;"> ادخال البيانات</button>
<iframe height="400px" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html" style="width: 800px;">
   
</iframe>

</h1></div>
</div>

<div id="pro3" class="container" style="overflow: scroll; height: 600px; display: none;">3</div>
<div id="pro4" class="container" style="overflow: scroll; height: 600px; display: none;">4</div>
<div id="pro5" class="container" style="overflow: scroll; height: 600px; display: none;">5</div>
<div id="pro6" class="container" style="overflow: scroll; height: 600px; display: none;">6</div>
<div id="pro7" class="container" style="overflow: scroll; height: 600px; display: none;">7</div>
<div id="pro8" class="container" style="overflow: scroll; height: 600px; display: none;">8</div>
<div id="pro9" class="container" style="overflow: scroll; height: 600px; display: none;">9</div>
<div id="pro10" class="container" style="overflow: scroll; height: 600px; display: none;">10</div>
<div id="pro11" class="container" style="overflow: scroll; height: 600px; display: none;">11</div>
<div id="pro12" class="container" style="overflow: scroll; height: 600px; display: none;">12</div>
<div id="pro13" class="container" style="overflow: scroll; height: 600px; display: none;">13</div>
<div id="pro14" class="container" style="overflow: scroll; height: 600px; display: none;">14</div>
<div id="pro15" class="container" style="overflow: scroll; height: 600px; display: none;">15</div>
<div id="pro16" class="container" style="overflow: scroll; height: 600px; display: none;">16</div>
<div id="pro17" class="container" style="overflow: scroll; height: 600px; display: none;">17</div>
<div id="pro18" class="container" style="overflow: scroll; height: 600px; display: none;">18</div>
<div id="pro19" class="container" style="overflow: scroll; height: 600px; display: none;">19</div>
<div id="pro20" class="container" style="overflow: scroll; height: 600px; display: none;">20</div>
<div id="pro21" class="container" style="overflow: scroll; height: 600px; display: none;">21</div>
<div id="pro22" class="container" style="overflow: scroll; height: 600px; display: none;">22</div>
<div id="pro23" class="container" style="overflow: scroll; height: 600px; display: none;">23</div>
<div id="pro24" class="container" style="overflow: scroll; height: 600px; display: none;">24</div>
<div id="pro25" class="container" style="overflow: scroll; height: 600px; display: none;">25</div>
<div id="pro26" class="container" style="overflow: scroll; height: 600px; display: none;">26</div>
<div id="pro27" class="container" style="overflow: scroll; height: 600px; display: none;">27</div>
<div id="pro28" class="container" style="overflow: scroll; height: 600px; display: none;">28</div>
<div id="pro29" class="container" style="overflow: scroll; height: 600px; display: none;">29</div>
<div id="pro30" class="container" style="overflow: scroll; height: 600px; display: none;">30</div>
<div id="pro31" class="container" style="overflow: scroll; height: 600px; display: none;">31</div>
<div id="pro32" class="container" style="overflow: scroll; height: 600px; display: none;">32</div>


</div></div>
					
                </div>
              </div>
         <div class="pull-right">
            البنك الالكترونى المصري|e-ebank  <a href="">السميز بالكامل منColorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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
  </style>
	<!--scroller -->
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
    <script src="./Gentallela Alela! __files/custom.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

	<script type="text/javascript" src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>
<script>
/*
 * SmartWizard 3.3.1 plugin
 * jQuery Wizard control Plugin
 * by Dipu
 *
 * Refactored and extended:
 * https://github.com/mstratman/jQuery-Smart-Wizard
 *
 * Original URLs:
 * http://www.techlaboratory.net
 * http://tech-laboratory.blogspot.com
 */

function SmartWizard(target, options) {
    this.target       = target;
    this.options      = options;
    this.curStepIdx   = options.selected;
    this.steps        = $(target).children("ul").children("li").children("a"); // Get all anchors
    this.contentWidth = 0;
    this.msgBox = $('<div class="msgBox"><div class="content"></div><a href="#" class="close">X</a></div>');
    this.elmStepContainer = $('<div></div>').addClass("stepContainer");
    this.loader = $('<div>Loading</div>').addClass("loader");
    this.buttons = {
        next : $('<a>'+options.labelNext+'</a>').attr("href","#").addClass("buttonNext"),
        previous : $('<a>'+options.labelPrevious+'</a>').attr("href","#").addClass("buttonPrevious"),
        finish  : $('<a>'+options.labelFinish+'</a>').attr("href","#").addClass("buttonFinish")
    };

    /*
     * Private functions
     */

    var _init = function($this) {
        var elmActionBar = $('<div></div>').addClass("actionBar");
        elmActionBar.append($this.msgBox);
        $('.close',$this.msgBox).click(function() {
            $this.msgBox.fadeOut("normal");
            return false;
        });

        var allDivs = $this.target.children('div');
        $this.target.children('ul').addClass("anchor");
        allDivs.addClass("content");

        // highlight steps with errors
        if($this.options.errorSteps && $this.options.errorSteps.length>0){
            $.each($this.options.errorSteps, function(i, n){
                $this.setError({ stepnum: n, iserror:true });
            });
        }

        $this.elmStepContainer.append(allDivs);
        elmActionBar.append($this.loader);
        $this.target.append($this.elmStepContainer);
        elmActionBar.append($this.buttons.finish)
                    .append($this.buttons.next)
                    .append($this.buttons.previous);
        $this.target.append(elmActionBar);
        this.contentWidth = $this.elmStepContainer.width();

        $($this.buttons.next).click(function() {
            $this.goBackward();
            return false;
        });
        $($this.buttons.previous).click(function() {
            $this.goForward();
            return false;
        });
        $($this.buttons.finish).click(function() {
            if(!$(this).hasClass('buttonDisabled')){
                if($.isFunction($this.options.onFinish)) {
                    var context = { fromStep: $this.curStepIdx + 1 };
                    if(!$this.options.onFinish.call(this,$($this.steps), context)){
                        return false;
                    }
                }else{
                    var frm = $this.target.parents('form');
                    if(frm && frm.length){
                        frm.submit();
                    }
                }
            }
            return false;
        });

        $($this.steps).bind("click", function(e){
            if($this.steps.index(this) == $this.curStepIdx){
                return false;
            }
            var nextStepIdx = $this.steps.index(this);
            var isDone = $this.steps.eq(nextStepIdx).attr("isDone") - 0;
            if(isDone == 1){
                _loadContent($this, nextStepIdx);
            }
            return false;
        });

        // Enable keyboard navigation
        if($this.options.keyNavigation){
            $(document).keyup(function(e){
                if(e.which==39){ // Right Arrow
                    $this.goForward();
                }else if(e.which==37){ // Left Arrow
                    $this.goBackward();
                }
            });
        }
        //  Prepare the steps
        _prepareSteps($this);
        // Show the first slected step
        _loadContent($this, $this.curStepIdx);
    };

    var _prepareSteps = function($this) {
        if(! $this.options.enableAllSteps){
            $($this.steps, $this.target).removeClass("selected").removeClass("done").addClass("disabled");
            $($this.steps, $this.target).attr("isDone",0);
        }else{
            $($this.steps, $this.target).removeClass("selected").removeClass("disabled").addClass("done");
            $($this.steps, $this.target).attr("isDone",1);
        }

        $($this.steps, $this.target).each(function(i){
            $($(this).attr("href").replace(/^.+#/, '#'), $this.target).hide();
            $(this).attr("rel",i+1);
        });
    };

    var _step = function ($this, selStep) {
        return $(
            $(selStep, $this.target).attr("href").replace(/^.+#/, '#'),
            $this.target
        );
    };

    var _loadContent = function($this, stepIdx) {
        var selStep = $this.steps.eq(stepIdx);
        var ajaxurl = $this.options.contentURL;
        var ajaxurl_data = $this.options.contentURLData;
        var hasContent = selStep.data('hasContent');
        var stepNum = stepIdx+1;
        if (ajaxurl && ajaxurl.length>0) {
            if ($this.options.contentCache && hasContent) {
                _showStep($this, stepIdx);
            } else {
                var ajax_args = {
                    url: ajaxurl,
                    type: "POST",
                    data: ({step_number : stepNum}),
                    dataType: "text",
                    beforeSend: function(){
                        $this.loader.show();
                    },
                    error: function(){
                        $this.loader.hide();
                    },
                    success: function(res){
                        $this.loader.hide();
                        if(res && res.length>0){
                            selStep.data('hasContent',true);
                            _step($this, selStep).html(res);
                            _showStep($this, stepIdx);
                        }
                    }
                };
                if (ajaxurl_data) {
                    ajax_args = $.extend(ajax_args, ajaxurl_data(stepNum));
                }
                $.ajax(ajax_args);
            }
        }else{
            _showStep($this,stepIdx);
        }
    };

    var _showStep = function($this, stepIdx) {
        var selStep = $this.steps.eq(stepIdx);
        var curStep = $this.steps.eq($this.curStepIdx);
        if(stepIdx != $this.curStepIdx){
            if($.isFunction($this.options.onLeaveStep)) {
                var context = { fromStep: $this.curStepIdx+1, toStep: stepIdx+1 };
                if (! $this.options.onLeaveStep.call($this,$(curStep), context)){
                    return false;
                }
            }
        }
        $this.elmStepContainer.height(_step($this, selStep).outerHeight());
        var prevCurStepIdx = $this.curStepIdx;
        $this.curStepIdx =  stepIdx;
        if ($this.options.transitionEffect == 'slide'){
            _step($this, curStep).slideUp("fast",function(e){
                _step($this, selStep).slideDown("fast");
                _setupStep($this,curStep,selStep);
            });
        } else if ($this.options.transitionEffect == 'fade'){
            _step($this, curStep).fadeOut("fast",function(e){
                _step($this, selStep).fadeIn("fast");
                _setupStep($this,curStep,selStep);
            });
        } else if ($this.options.transitionEffect == 'slideright'){
            var nextElmLeft = 0;
            var nextElmLeft1 = null;
            var nextElmLeft = null;
            var curElementLeft = 0;
            if(stepIdx > prevCurStepIdx){
                nextElmLeft1 = $this.contentWidth + 6;
                nextElmLeft2 = 0;
                curElementLeft = 0 - _step($this, curStep).outerWidth();
            } else {
                nextElmLeft1 = 0 - _step($this, selStep).outerWidth() + 12;
                nextElmLeft2 = 0;
                curElementLeft = 6 + _step($this, curStep).outerWidth();
            }
            if (stepIdx == prevCurStepIdx) {
                nextElmLeft1 = $($(selStep, $this.target).attr("href"), $this.target).outerWidth() + 12;
                nextElmLeft2 = 0;
                curElementLeft = 0 - $($(curStep, $this.target).attr("href"), $this.target).outerWidth();
            } else {
                $($(curStep, $this.target).attr("href"), $this.target).animate({left:curElementLeft},"fast",function(e){
                    $($(curStep, $this.target).attr("href"), $this.target).hide();
                });
            }

            _step($this, selStep).css("left",nextElmLeft1).show().animate({left:nextElmLeft2},"fast",function(e){
                _setupStep($this,curStep,selStep);
            });
        } else {
            _step($this, curStep).hide();
            _step($this, selStep).show();
            _setupStep($this,curStep,selStep);
        }
        return true;
    };

    var _setupStep = function($this, curStep, selStep) {
        $(curStep, $this.target).removeClass("selected");
        $(curStep, $this.target).addClass("done");

        $(selStep, $this.target).removeClass("disabled");
        $(selStep, $this.target).removeClass("done");
        $(selStep, $this.target).addClass("selected");

        $(selStep, $this.target).attr("isDone",1);

        _adjustButton($this);

        if($.isFunction($this.options.onShowStep)) {
            var context = { fromStep: parseInt($(curStep).attr('rel')), toStep: parseInt($(selStep).attr('rel')) };
            if(! $this.options.onShowStep.call(this,$(selStep),context)){
                return false;
            }
        }
        if ($this.options.noForwardJumping) {
            // +2 == +1 (for index to step num) +1 (for next step)
            for (var i = $this.curStepIdx + 2; i <= $this.steps.length; i++) {
                $this.disableStep(i);
            }
        }
    };

    var _adjustButton = function($this) {
        if (! $this.options.cycleSteps){
            if (0 >= $this.curStepIdx) {
                $($this.buttons.previous).addClass("buttonDisabled");
				if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.previous).hide();
                }
            }else{
                $($this.buttons.previous).removeClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.previous).show();
                }
            }
            if (($this.steps.length) <= $this.curStepIdx){
                $($this.buttons.next).addClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.next).hide();
                }
            }else{
                $($this.buttons.next).removeClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.next).show();
                }
            }
        }
        // Finish Button
        if (! $this.steps.hasClass('disabled') || $this.options.enableFinishButton){
            $($this.buttons.finish).removeClass("buttonDisabled");
            if ($this.options.hideButtonsOnDisabled) {
                $($this.buttons.finish).show();
            }
        }else{
            $($this.buttons.finish).addClass("buttonDisabled");
            if ($this.options.hideButtonsOnDisabled) {
                $($this.buttons.finish).hide();
            }
        }
    };

    /*
     * Public methods
     */

    SmartWizard.prototype.goForward = function(){
        var nextStepIdx = this.curStepIdx + 1;
        if (this.steps.length <= nextStepIdx){
            if (! this.options.cycleSteps){
                return false;
            }
            nextStepIdx = 0;
        }
        _loadContent(this, nextStepIdx);
    };

    SmartWizard.prototype.goBackward = function(){
        var nextStepIdx = this.curStepIdx-1;
        if (0 > nextStepIdx){
            if (! this.options.cycleSteps){
                return false;
            }
            nextStepIdx = this.steps.length - 1;
        }
        _loadContent(this, nextStepIdx);
    };

    SmartWizard.prototype.goToStep = function(stepNum){
        var stepIdx = stepNum - 1;
        if (stepIdx >= 0 && stepIdx < this.steps.length) {
            _loadContent(this, stepIdx);
        }
    };
    SmartWizard.prototype.enableStep = function(stepNum) {
        var stepIdx = stepNum - 1;
        if (stepIdx == this.curStepIdx || stepIdx < 0 || stepIdx >= this.steps.length) {
            return false;
        }
        var step = this.steps.eq(stepIdx);
        $(step, this.target).attr("isDone",1);
        $(step, this.target).removeClass("disabled").removeClass("selected").addClass("done");
    }
    SmartWizard.prototype.disableStep = function(stepNum) {
        var stepIdx = stepNum - 1;
        if (stepIdx == this.curStepIdx || stepIdx < 0 || stepIdx >= this.steps.length) {
            return false;
        }
        var step = this.steps.eq(stepIdx);
        $(step, this.target).attr("isDone",0);
        $(step, this.target).removeClass("done").removeClass("selected").addClass("disabled");
    }
    SmartWizard.prototype.currentStep = function() {
        return this.curStepIdx + 1;
    }

    SmartWizard.prototype.showMessage = function (msg) {
        $('.content', this.msgBox).html(msg);
        this.msgBox.show();
    }
    SmartWizard.prototype.hideMessage = function () {
        this.msgBox.fadeOut("normal");
    }
    SmartWizard.prototype.showError = function(stepnum) {
        this.setError(stepnum, true);
    }
    SmartWizard.prototype.hideError = function(stepnum) {
        this.setError(stepnum, false);
    }
    SmartWizard.prototype.setError = function(stepnum,iserror) {
        if (typeof stepnum == "object") {
            iserror = stepnum.iserror;
            stepnum = stepnum.stepnum;
        }

        if (iserror){
            $(this.steps.eq(stepnum-1), this.target).addClass('error')
        }else{
            $(this.steps.eq(stepnum-1), this.target).removeClass("error");
        }
    }

    SmartWizard.prototype.fixHeight = function(){
        var height = 0;

        var selStep = this.steps.eq(this.curStepIdx);
        var stepContainer = _step(this, selStep);
        stepContainer.children().each(function() {
            height += $(this).outerHeight();
        });

        // These values (5 and 20) are experimentally chosen.
        stepContainer.height(height + 5);
        this.elmStepContainer.height(height + 20);
    }

    _init(this);
};



(function($){

$.fn.smartWizard = function(method) {
    var args = arguments;
    var rv = undefined;
    var allObjs = this.each(function() {
        var wiz = $(this).data('smartWizard');
        if (typeof method == 'object' || ! method || ! wiz) {
            var options = $.extend({}, $.fn.smartWizard.defaults, method || {});
            if (! wiz) {
                wiz = new SmartWizard($(this), options);
                $(this).data('smartWizard', wiz);
            }
        } else {
            if (typeof SmartWizard.prototype[method] == "function") {
                rv = SmartWizard.prototype[method].apply(wiz, Array.prototype.slice.call(args, 1));
                return rv;
            } else {
                $.error('Method ' + method + ' does not exist on jQuery.smartWizard');
            }
        }
    });
    if (rv === undefined) {
        return allObjs;
    } else {
        return rv;
    }
};

// Default Properties and Events
$.fn.smartWizard.defaults = {
    selected: 5,  // Selected Step, 0 = first step
    keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
    enableAllSteps: false,
    transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
    contentURL:null, // content url, Enables Ajax content loading
    contentCache:true, // cache step contents, if false content is fetched always from ajax url
    cycleSteps: false, // cycle step navigation
    enableFinishButton: false, // make finish button enabled always
	hideButtonsOnDisabled: false, // when the previous/next/finish buttons are disabled, hide them instead?
    errorSteps:[],    // Array Steps with errors
    labelNext:'تقدم',
    labelPrevious:'رجوع',
    labelFinish:'انهاء',
    noForwardJumping: false,
    onLeaveStep: null, // triggers when leaving a step
    onShowStep: null,  // triggers when showing a step
    onFinish: null  // triggers when Finish button is clicked
};

})(jQuery);
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
	

	  <audio autoplay>
      <source src="http://www.ebank.esy.es/Double Beep.mp3" type="audio/mpeg">
</audio>
	
</body>
</html>