<!DOCTYPE html>
<!-- saved from url=(0050)https://colorlib.com/polygon/gentelella/index.html -->
<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <?php
	ob_start();
	session_start();
	require_once 'login/dbconnect.php';
	

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
    <link href="http://www.ebank.esy.es/login/Gentallela Alela! __files/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://www.ebank.esy.es/login/Gentallela Alela! __files/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="http://www.ebank.esy.es/login/Gentallela Alela! __files/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery-jvectormap-2.0.3.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://www.ebank.esy.es/login/Gentallela Alela! __files/custom.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style.css">
<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style1.css">
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
   
 		 
<div id="head">
		<?php
			include('login/head.php');
		?>
	</div>

    <div class="container body">
      <div class="main_container">
<?php include('login/Sidemenu.php'); ?>
         <!-- top navigation -->
         <?php include('login/topmenu.php');?>
         <!-- /top navigation -->
    <div class="right_col" role="main" style="min-height: 1732px; ">  
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
			
             
<div class="tab">
 
 <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">☰</button>
   
  <button class="tablinks active" onclick="openCity(event, 'London')"><div class="toolbar-icon"></div><div class="toolbar-label">الدخول بالمناقصة</div></button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">كراسة التفاصيل</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">المبالغ والعمالة</button>
</div>

<div id="London" class="tabcontent" style="display: block;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Sidebar -->
<div id="rightMenu" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display: none;">
<a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
  <h3 class="w3-bar-item">قوائم العمل</h3>
  <a href="#" class="w3-bar-item w3-button">المناقصات</a>
  <a href="#" class="w3-bar-item w3-button">الشروط</a>
  <a href="#" class="w3-bar-item w3-button">التقديم</a>
</div>
<div id="lo" style="margin-right: 10.76%; width: 100%;">

<table style="
    text-align: center;
">
  <tbody><tr>
    
<th>المناقصة</th>
<th>المناقصة</th>
<th>المناقصة</th>
<th style="
    text-align: center;
">المناقصة</th>
<th>المناقصة</th>
<th>المناقصة</th><th>المناقصة</th>
    <th>تاريخ البدء</th>
    <th>العنوان</th>
  </tr>
  <tr>
    
      <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
      <td>Alfreds Futterkiste</td><td>Alfreds Futterkiste</td>
    
    <td>Maria Anders</td><td>Maria Anders</td>
    
    <td>Germany</td><td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  <td>Centro comercial Moctezuma</td><td>Centro comercial Moctezuma</td>
    
    <td>Francisco Chang</td><td>Francisco Chang</td>
    
    <td>Mexico</td><td>Mexico</td>
  
  </tr>
  <tr>
    
   <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
   <td>Ernst Handel</td><td>Ernst Handel</td>
    
    <td>Roland Mendel</td><td>Roland Mendel</td>
    
    <td>Austria</td><td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  <td>Island Trading</td><td>Island Trading</td>
    
    <td>Helen Bennett</td><td>Helen Bennett</td>
    
    <td>UK</td><td>UK</td>
  
  </tr>
  <tr>
    
  
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  
    <td>Laughing Bacchus Winecellars</td><td>Laughing Bacchus Winecellars</td>
    
    <td>Yoshi Tannamuri</td><td>Yoshi Tannamuri</td>
    
    <td>Canada</td><td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  <td>Magazzini Alimentari Riuniti</td><td>Magazzini Alimentari Riuniti</td>
    
    <td>Giovanni Rovelli</td><td>Giovanni Rovelli</td>
    
    <td>Italy</td><td>Italy</td>
  
  </tr>
</tbody></table>
</div>

<!-- Page Content -->
</div>

<div id="Paris" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Sidebar -->
<div id="rightMenu1" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(50, 99, 114, 0.42); display: none;">
<a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
  <h3 class="w3-bar-item">كرسات العمل</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div id="pa" style="margin-right: 10.76%; width: 100%;">

<table>
  <tbody><tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</tbody></table>
</div>
</div>

<div id="Tokyo" class="tabcontent" style="display: none;">

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 

<!-- Sidebar -->
<div id="rightMenu2" class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="background-color: rgba(0, 150, 136, 0.35); display: none;">
 <a href="#close" title="Close" onclick="closeRightMenu()" class="close">X</a>
 <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<!-- Page Content -->
<div id="to" style="margin-right: 10.76%; width: 100%;">

<div class="w3-container w3-teal">
  <h1>My Page</h1>
</div>


<div class="w3-container">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
  
</div>
</div>
</div>


<script>

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
	document.getElementById("rightMenu1").style.display = "block";
	document.getElementById("rightMenu2").style.display = "block";
	document.getElementById("lo").style.width = "89.4%";
	document.getElementById("pa").style.width = "89.4%";
	document.getElementById("to").style.width = "89.4%";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
	document.getElementById("rightMenu1").style.display = "none";
	document.getElementById("rightMenu2").style.display = "none";
	document.getElementById("lo").style.width = "100%";
	document.getElementById("pa").style.width = "100%";
	document.getElementById("to").style.width = "100%";
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
  
  
  
  
  
  
  function PopupCenter(url, title, w, h) {  
    // Fixes dual-screen position                         Most browsers      Firefox  
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;  
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;  
              
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
              
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
    var top = ((height / 2) - (h / 2)) + dualScreenTop;  
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
  
    // Puts focus on the newWindow  
    if (window.focus) {  
        newWindow.focus();  
    }  
}  
</script>

 <style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #2b5b69;
    background-color: rgba(35, 57, 73, 0.58);
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: right;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
	    color: #31908c;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: rgba(39, 162, 190, 0.57);
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: rgba(18, 34, 49, 0.4);
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 0px 0px !important;
    /*border: 1px solid #ccc;
    border-top: none;*/  
}
a {
    width: 100%;
    display: block;
    padding: 8px 16px;
    text-align: left;
    border: none;
    outline: none;
    white-space: normal;
    float: none;
    text-decoration: inherit;
    color: aliceblue;
}
a:hover {
color:black;
    background-color: #ccc;
}
.w3-teal, .w3-hover-teal:hover {
    color: rgba(40, 115, 101, 0.29)!important;
    background-color: rgba(15, 30, 28, 0.32)!important;
}
.w3-container, .w3-panel {
    padding: 0.01em 16px;
	background-color: rgba(27, 93, 102, 0.51);
}
.w3-sidebar {
right: 100px;
padding: 0.01em 0px 0.01em 16px;
height: 100%;
overflow: auto;width:25%;background-color: rgba(28, 56, 70, 0.62);position: fixed!important;
    z-index: 1;
    overflow: auto;width:10%;
	}
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid rgb(58, 117, 162);
    text-align: left;
    /* padding: 8px; */
	text-align: center;
}

tr:nth-child(even) {
    background-color: #326372;
}
.toolbar-item.elements .toolbar-icon {
    background-image: url(Images/elementsIcon.png);
}
 .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: 1px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }
    .close:hover { background: #00d9ff; }
</style>

            </div>
          </div>
          <!-- /top tiles -->

		  
		  
		  
		  
		 
        <!-- /footer content -->
      </div>
    </div>

	
		  <?php
			include('login/menu.php');
		?>
	  <!-- jQuery -->
    <script async="" src="http://www.ebank.esy.es/login/Gentallela Alela! __files/analytics.js.download"></script>
	<script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.min.js.download"></script>
    <!-- Bootstrap -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/bootstrap.min.js.download"></script>
    <!-- FastClick -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/fastclick.js.download"></script>
    <!-- NProgress -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/nprogress.js.download"></script>
    <!-- Chart.js -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/Chart.min.js.download"></script>
    <!-- gauge.js -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/gauge.min.js.download"></script>
    <!-- bootstrap-progressbar -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/bootstrap-progressbar.min.js.download"></script>
    <!-- iCheck -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/icheck.min.js.download"></script>
    <!-- Skycons -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/skycons.js.download"></script>
    <!-- Flot -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.pie.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.time.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.stack.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.resize.js.download"></script>
    <!-- Flot plugins -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.orderBars.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/date.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery.flot.spline.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/curvedLines.js.download"></script>
    <!-- jVectorMap -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/jquery-jvectormap-2.0.3.min.js.download"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/moment.min.js.download"></script>
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/daterangepicker.js.download"></script>

    <!-- Custom Theme Scripts -->
    <script src="http://www.ebank.esy.es/login/Gentallela Alela! __files/custom.min.js.download"></script>
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
.nav-sm .container.body .right_col { 
    margin-right: 26px !important; 
}
  </style>
 
  </body>

</html>