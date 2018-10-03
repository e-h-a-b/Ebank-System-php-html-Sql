<!DOCTYPE html>
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
	
	$profit=mysql_query("SELECT * FROM profit WHERE id=1 ");
	$uRow=mysql_fetch_array($profit);
	$profit2=mysql_query("SELECT * FROM profit WHERE id=2 ");
	$uRow2=mysql_fetch_array($profit2);
	$profit3=mysql_query("SELECT * FROM profit WHERE id=3 ");
	$uRow3=mysql_fetch_array($profit3);
	$profit4=mysql_query("SELECT * FROM profit WHERE id=4 ");
	$uRow4=mysql_fetch_array($profit4);
	$profit5=mysql_query("SELECT * FROM profit WHERE id=5 ");
	$uRow5=mysql_fetch_array($profit5);
	$profit5=mysql_query("SELECT * FROM profit WHERE id=6 ");
	$uRow5=mysql_fetch_array($profit5);
	$profit6=mysql_query("SELECT * FROM profit WHERE id=7 ");
	$uRow6=mysql_fetch_array($profit6);
	$profit7=mysql_query("SELECT * FROM profit WHERE id=8 ");
	$uRow7=mysql_fetch_array($profit7);
	$profit8=mysql_query("SELECT * FROM profit WHERE id=9 ");
	$uRow8=mysql_fetch_array($profit8);
	$profit9=mysql_query("SELECT * FROM profit WHERE id=10 ");
	$uRow9=mysql_fetch_array($profit9);
	$profit10=mysql_query("SELECT * FROM profit WHERE id=11 ");
	$uRow10=mysql_fetch_array($profit10);
	$profit11=mysql_query("SELECT * FROM profit WHERE id=12 ");
	$uRow11=mysql_fetch_array($profit11);
	$profit12=mysql_query("SELECT * FROM profit WHERE id=13 ");
	$uRow12=mysql_fetch_array($profit12);
	$profit13=mysql_query("SELECT * FROM profit WHERE id=14 ");
	$uRow13=mysql_fetch_array($profit13);
	$profit14=mysql_query("SELECT * FROM profit WHERE id=15 ");
	$uRow14=mysql_fetch_array($profit14);
	$profit15=mysql_query("SELECT * FROM profit WHERE id=16 ");
	$uRow15=mysql_fetch_array($profit15);
	$profit16=mysql_query("SELECT * FROM profit WHERE id=17 ");
	$uRow16=mysql_fetch_array($profit16);
	$profit17=mysql_query("SELECT * FROM profit WHERE id=18 ");
	$uRow17=mysql_fetch_array($profit17);
	$profit18=mysql_query("SELECT * FROM profit WHERE id=19 ");
	$uRow18=mysql_fetch_array($profit18);
	$profit19=mysql_query("SELECT * FROM profit WHERE id=20 ");
	$uRow19=mysql_fetch_array($profit19);
	$profit20=mysql_query("SELECT * FROM profit WHERE id=21 ");
	$uRow20=mysql_fetch_array($profit20);
	$profit21=mysql_query("SELECT * FROM profit WHERE id=22 ");
	$uRow21=mysql_fetch_array($profit21);
	$profit22=mysql_query("SELECT * FROM profit WHERE id=23 ");
	$uRow22=mysql_fetch_array($profit22);
	$profit23=mysql_query("SELECT * FROM profit WHERE id=24 ");
	$uRow23=mysql_fetch_array($profit23);
	$profit24=mysql_query("SELECT * FROM profit WHERE id=25 ");
	$uRow24=mysql_fetch_array($profit24);
	$profit25=mysql_query("SELECT * FROM profit WHERE id=26 ");
	$uRow25=mysql_fetch_array($profit25);
	$profit26=mysql_query("SELECT * FROM profit WHERE id=27 ");
	$uRow26=mysql_fetch_array($profit26);
	$profit27=mysql_query("SELECT * FROM profit WHERE id=28 ");
	$uRow27=mysql_fetch_array($profit27);
	$profit28=mysql_query("SELECT * FROM profit WHERE id=29 ");
	$uRow28=mysql_fetch_array($profit28);
	$profit29=mysql_query("SELECT * FROM profit WHERE id=30 ");
	$uRow29=mysql_fetch_array($profit29);
	$profit30=mysql_query("SELECT * FROM profit WHERE id=31 ");
	$uRow30=mysql_fetch_array($profit30);
	$profit31=mysql_query("SELECT * FROM profit WHERE id=32 ");
	$uRow31=mysql_fetch_array($profit31);
	 
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
  <?php
  // This program generates a web pages that gets 
  // the user's information, saves it to a file, 
  // and displays it on the web page.
  // Created by Mitchell Robinson.
  // 27 July, 2014.
  
  // Name of the ip address log.
  $outputWebBug = 'iplog.csv';

  // Get the ip address and info about client.
  @ $details = json_decode(file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json"));
  @ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
  
  // Get the query string from the URL.
  $QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
  
  // Write the ip address and info to file.
  @ $fileHandle = fopen($outputWebBug, "a");
  if ($fileHandle)
  {
    $string ='"'.$QUERY_STRING.'","' // everything after "?" in the URL
      .$_SERVER['REMOTE_ADDR'].'","' // ip address
      .$hostname.'","' // hostname
      .$_SERVER['HTTP_USER_AGENT'].'","' // browser and operating system
      .$_SERVER['HTTP_REFERER'].'","' // where they got the link for this page
      .$details->loc.'","' // latitude, longitude
      .$details->org.'","' // internet service provider
      .$details->city.'","'  // city
      .$details->region.'","' // state
      .$details->country.'","' // country
      .date("D dS M,Y h:i a").'"' // date
      ."\n"
      ;
     $write = fputs($fileHandle, $string);
    @ fclose($fileHandle);
  }

  
?>

<html lang="en" class=" "><head>

<?php
include('config2.php');
?>
<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>البنك الالكترونى المصري|e-ebank </title>

    <!-- Bootstrap 
    <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
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
	    <!-- Custom Theme Scripts -->
   
	  <script src="./Gentallela Alela! __files/codepg.js"></script>
	
	<!-- <style>
//body { font-family: KacstTitle; src: url('http://www.ebank.esy.es/font/KacstTitle.ttf'); } 

</style>-->
<script>
	(function() {
    var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'shortcut icon';
    link.href = 'http://www.ebank.esy.es/login/m.ico';
    document.getElementsByTagName('head')[0].appendChild(link);
}());
	</script>
	
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style.css" />
<script scr="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<!-- مناقصات اعانات تبرعات -->  
		   
<style>
.menu {
    position: relative;
    display: inline-block;
}

.menu-n {
    display: none;
   /* position: absolute; */
    background-color: rgba(0, 0, 0, 0.28);
    min-width:846px;
     min-height:246px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.menu:hover  .menu-n {
    display: block;
}
/* Reset code to remove theme inherent styling */
.dcjq-mega-menu ul.menu ul, .dcjq-mega-menu ul.menu li {
list-style: none; 
padding: 0; 
margin: 0;
}
  
/* Sub-menu Headers */
.dcjq-mega-menu ul.menu li .sub li.mega-hdr { /* Sub-menu headers - i.e. 2nd level navigation */
float: left; /* Float the sub-menus and give them a fixed width to from the mega menu rows */
width: 260px;
margin: 0 10px 20px 10px;
border: 1px solid rgba(76, 86, 99, 0.42); 
}
.dcjq-mega-menu ul.menu li .sub a { /* Clear the styles from the top-level links and set the font styles */
background: none; 
border: none; 
text-shadow: none; 
color: #111; 
padding: 1px 10px; 
display: block; 
float: none; 
text-decoration: none; 
font-size: 0.9em; 
}
.dcjq-mega-menu ul.menu li .sub li.mega-hdr a.mega-hdr-a {
padding: 1px 10px; 
margin-bottom: 5px; 
border-bottom: 1px solid #1c232a; 
text-transform: uppercase; 
font-weight: bold; 
color: #4eb284; 
background: rgba(39, 54, 70, 0.31) url(images/bg_hdr.png) repeat-x center center;
    
    text-align: center;
}
 
li#menu-item-1:hover{
	background-color: rgba(43, 112, 185, 0.08);
	border-color: #1e516f;
}
 li#menu-item-2:hover{
	background-color: rgba(43, 112, 185, 0.08);
	border-color: #1e516f;
}li#menu-item-3:hover{
	background-color: rgba(43, 112, 185, 0.08);
	border-color: #1e516f;
}li#menu-item-4:hover{
	background-color: rgba(43, 112, 185, 0.08);
	border-color: #1e516f;
}li#menu-item-5:hover{
	background-color: rgba(43, 112, 185, 0.08);
	border-color: #1e516f;
}li#menu-item-6:hover{
	background-color: rgba(43, 112, 185, 0.08);
	border-color: #1e516f;
}

/* Style the 3rd level links */
.dcjq-mega-menu ul.menu li .sub li ul li {
margin-right: 90px;
}
.dcjq-mega-menu ul.menu .sub li.mega-hdr li a {
color: #444;
font-weight: normal; 
padding: 3px 0 3px 25px; 
background: url(images/bullet.png) no-repeat 10px 8px; 
}
.dcjq-mega-menu ul.menu .sub li.mega-hdr li a:hover {
color: #990000;
background-image: url(images/bullet_on.png); 
}
 .desc {
   
    text-align: center;
}
</style>
 
 		<?php 
		$_GET['id'] = 7;
       include('visitor.php');
	   ?>
<meta name="viewport" content="width=device-width">
  </head>

	
   <!-- <div id="search-layer"></div>  -->
	
   <!-- <div id="lowrbdy">
		<img class="bdimg" src="os1.jpg">
	</div>-->
  <body class="nav-sm">
<a href="http://www.ebank.esy.es/Futurejob.html" id="hh4" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'tickets.png']);" rel="nofollow" style="display:block;position:fixed;top: 90%;right:0;width:40px;height:45px;right: 20px;z-index: 999;" target="_blank" title="ادعم الموقع بتعديل واكتشاف الاخطاء ادعم الموقع بخطوط برمجة وابداء الاراء" class="animated fadein">
  <img alt="Ebank" src="https://4.bp.blogspot.com/-r5O79iU-VAE/WWqJQ-DsqGI/AAAAAAAAAW8/38QjQe8W7e0oGwa8baA-NrYaNiRKwy1cgCLcBGAs/s320/hm.png" style="
    height: 50px;
    width: 50px;
">
</a>
  <a href="http://ebank.esy.es/Add system.php" id="hh1" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'http://icons.iconarchive.com/icons/arrioch/whack/128/Whack-Google-Earth-icon.png']);" rel="nofollow" style="display:block;position: absolute;top: 80px;width:40px;height:45px;left: 5px;z-index: 1;" target="_blank" title="البنك الالكتروني المصري" class="animated zoomin">
  <img alt="Ebank" src="https://cdn3.iconfinder.com/data/icons/user-group-1/100/1-user-edit-512.png" style="
    height: 50px;
    width: 50px;
    ">
</a>
    <div class="container body">
      <div class="main_container">
      <?php include('Sidemenu.php'); ?>
 <!-- top navigation -->
      <?php include('topmenu.php'); ?>
 <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1527px;">          <!-- top tiles -->
            <?php include('stripuser.php'); ?>
          <!-- /top tiles -->
		  
		  
		  

 

<div class="menu" style="margin-bottom: 10px;">
   
  <div class="row tile_count" style="margin-bottom: 0px;margin-top: 0px;"><div class="desc" style="background: rgba(12, 100, 43, 0.52);">----------اعمال--------</div></div>
  <div class="menu-n" center>

<div class="dcjq-mega-menu">
<ul id="mega-menu-tut" class="menu">
 
<li  > 
<div class="sub-container mega" style="left: 0px; top: 40px; z-index: 1000;">


<ul class="sub" id="meg" style="display: block;">

<div class="row" style="width: 846px;">

<li id="menu-item-1" class="mega-unit mega-hdr  " style="height: 146px;">
<a href="/A1.php" class="mega-hdr-a" style="height: 16px;">مناقصات</a>
<img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="250" height="100">

</li>
<li id="menu-item-2" class="mega-unit mega-hdr" style="height: 146px;">
<a href="/A2.php" class="mega-hdr-a" style="height: 16px;">مزادات</a>
<img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="250" height="100">
</li>
<li id="menu-item-3" class="mega-unit mega-hdr  " style="height: 146px;">
<a href="/A3.php" class="mega-hdr-a" style="height: 16px;">عطاءات</a>
<img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="250" height="100">
</li>
</div>
<div class="row" style="width: 846px;">
<li id="menu-item-4" class="mega-unit mega-hdr" style="height: 146px;">
<a href="/A4.php" class="mega-hdr-a" style="height: 16px;">اعانات</a>
<img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="250" height="100">
</li>
<li id="menu-item-5" class="mega-unit mega-hdr" style="height: 146px;">
<a href="/A5.php" class="mega-hdr-a" style="height: 16px;">تموينات</a>
<img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="250" height="100">
</li>
<li id="menu-item-6" class="mega-unit mega-hdr last" style="height: 146px;">
<a href="/A6.php" class="mega-hdr-a" style="height: 16px;">تبرعات</a>
<img src="https://www.w3schools.com/css/img_fjords.jpg" alt="Trolltunga Norway" width="250" height="100">
</li>


</div>

<audio id="so"  preload="auto">
		<source src="http://ebank.esy.es/move.mp3" ></source>
		</audio>
</ul>

</div>
</li>
 
</ul>
</div>
  </div>
</div>



		  <!-- مناقصات اعانات تبرعات --> 
		  
		  
		  
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
		  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="
    left: 0px;
">
              <div class="dashboard_graph" >				  
<?Php 
$ft=mysql_query('select * from bids');
$rr=mysql_fetch_array($ft);
$closedate=$rr['closing_date'];

?>
                <div class="row x_title">
<style>

</style>
								<p style="margin-left: 30%;color: #73879C;">&#1576;&#1583;&#1569; &#1593;&#1605;&#1604; &#1575;&#1604;&#1605;&#1608;&#1602;&#1593;: 12/31/2016 16:50:26 </p>
		<p style="margin-left: 30%;color: #73879C;">&#1576;&#1575;&#1602;&#1609; &#1605;&#1606; &#1575;&#1604;&#1586;&#1605;&#1606;:
<script language="JavaScript">
TargetDate = "<?php echo $closedate; ?>";
ForeColor = "black";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% &#1610;&#1608;&#1605;, %%H%% &#1587;&#1575;&#1593;&#1577;, %%M%% &#1583;&#1602;&#1610;&#1602;&#1577;, %%S%% &#1579;&#1575;&#1606;&#1610;&#1577;";
FinishMessage = "&#1575;&#1607;&#1604;&#1575; &#1576;&#1603;&#1605; &#1608;&#1605;&#1585;&#1581;&#1576;&#1575;!";
</script>
<script language="JavaScript" src="countdown.js"></script>
</p>
<div class="col-md-6" style="left: 30%;">
                    <h3>نشاطات المشروعات <small>بيان باعمال البنك</small></h3>
                  </div>
				  <script language="JavaScript" src="countdown/countdown.js"></script>
                  
                </div>
				<h2 style="
    background-color: rgba(12, 100, 43, 0.52);
">100000000   اجمالى الاموال بالسوق</h2>
<div style="padding-left:100px;">
				<div class="col-md-9 col-sm-9 col-xs-12" style="width: 250px;">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">4 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cmachine"></span><a href="project13.php"> مشروع انتاج الماكينات </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0" aria-valuenow="1" style="width:<?=$uRow12['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8c"></span><a href="project14.php">مشروع دعم المصانع المغلقة </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow13['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8ccarshop"></span><a href="project15.php">مشروع اسواق تابعة للبنك</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow14['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8crecycle"></span><a href="project16.php">مشروع تدوير المخلفات والالات القديمة </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-bule" role="progressbar" data-transitiongoal="1" aria-valuenow="1" style="width: <?=$uRow15['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                
  <div class="col-md-9 col-sm-9 col-xs-12" style="width: 250px;">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">3 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8celectrcell"></span><a href="project9.php"> مشروع صنع خلايا شمسية تكلفة</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow8['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8coiltogas"></span><a href="project10.php">مشروع تحويل السيارت من بنزين الى غاز </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow9['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cengine"></span><a href="project11.php">مشروع تصنيع المحركات الكهربية </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow10['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cmachinebody"></span><a href="project12.php">مشروع صنع هياكل المعدات</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-bule" role="progressbar" data-transitiongoal="1" aria-valuenow="1" style="width: <?=$uRow11['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
 </div>
				<div class="col-md-9 col-sm-9 col-xs-12" style="width: 250px;">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">2 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cchiken"></span><a href="project5.php"> مشروع الدواجن </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow4['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8csheeps"></span><a href="project6.php">مشروع الماشية  </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow5['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8ccow"></span><a href="project7.php">مشروع الابقار </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow6['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cfish"></span><a href="project8.php">مشروع الاسماك </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow7['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">1 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cirrgationground"></span><a href="project1.php"> مشروع ري الاراضي </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cnewgroundfood"></span><a href="project2.php">مشروع استصلاح اراضي </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow1['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8c"></span><a href="project3.php">مشروع تحلية المياة </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow2['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cmachineagr"></span><a href="project4.php">مشروع الالات الزراعية </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-bule" role="progressbar" data-transitiongoal="1" aria-valuenow="1" style="width: <?=$uRow3['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
			  </div>
</br>
			  <div class="dashboard_graph" >

                <div style="padding-left:100px;">
<div class="col-md-9 col-sm-9 col-xs-12" style="width: 250px;">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">8 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8ccars"></span><a href="project29.php">انتاج المركبات مثل السيارة</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow28['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8celectronicsheet"></span><a href="project30.php">مشروع انتاج المكاينات الالكترونية </a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow29['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8c"></span><a href="project31.php">مشروعات الرفهاية مثل ماكينات الطبخ</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow30['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cidea"></span><a href="project32.php">اقترح مشروعا اساسيا مربحا ومنخفض التكلفة</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-bule" role="progressbar" data-transitiongoal="1" aria-valuenow="1" style="width: <?=$uRow31['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                
  <div class="col-md-9 col-sm-9 col-xs-12" style="width: 250px;">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">7 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cidea"></span><a href="project25.php">مشروع مقترح من قبل الاعضاء</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow24['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cmatrial"></span><a href="project26.php">مشروع جمع القطع المعدانية من المنازل</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow25['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cmatrial"></span><a href="project27.php">مشروع استنساخ وتطوير المعدات</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow26['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cgenerator"></span><a href="project28.php">مشروع انتاج الاجهزة الالكترونية</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-bule" role="progressbar" data-transitiongoal="1" aria-valuenow="1" style="width: <?=$uRow27['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
</div>
				
<div class="col-md-9 col-sm-9 col-xs-12" style="width: 250px;">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">6 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cgenerator"></span><a href="project21.php">مصانع انتاج مولدات كهربائية</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow20['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8chealthy"></span><a href="project22.php">مشروع استبدال ملوثات البيئة</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow21['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8c"></span><a href="project23.php">مشروع استخراج المواد الخام</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow22['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8c"></span><a href="project24.php">مشروع انتاج الاداوت المنزلية</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow23['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
</div>
				
<div class="col-md-3 col-sm-3 col-xs-12 ">
                  <div class="x_title">
                    <h2 style="padding-left: 20px;">5 بيان بتنفيذ المشروعات</h2>
                    <div class="clearfix"></div>
                  </div>

 <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8chome"></span><a href="project17.php">مشروع انشاء واحدت سكانية</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow16['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cshose"></span><a href="project18.php">مصانع انتاج الاحذية</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-orange" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow17['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8cCloth"></span><a href="project19.php">مصانع انتاج الملابس</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width: <?=$uRow18['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><span class="img sp_VHDv9vKS1QB sx_254a8c"></span><a href="project20.php">مصانع انتاج اليات الكترونية</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-bule" role="progressbar" data-transitiongoal="1" aria-valuenow="1" style="width: <?=$uRow19['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>

</div>
</div> 
                <div class="clearfix"></div>
              
		  
		  </div>
			  
<br>
            </div>
			


          <div class="row">

<div class="col-md-4 col-sm-4 col-xs-12" style="font-size: 10px;">
              <div class="x_panel tile fixed_height_320" style="
    height: 317px;
    margin-bottom: 5px;
    padding-bottom: 5px;
" dir="rtl">
                <div class="x_title" dir="rtl">
                  <h style="margin-left: 130px;font-size: 30px;">الخضروات</h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="">Settings 1</a>
                        </li>
                        <li><a href="">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <span class="img sp_VHDv9vKS1QB sx_254a8c1" onclick="myFunction1()" title="نعنان Press: shift + q"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c2" onclick="myFunction2()" title="شبت Press: shift + w"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c3" onclick="myFunction3()" title="ملوخية Press: shift + e"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c4" onclick="myFunction4()" title="ثوم Press: shift + r"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c5" onclick="myFunction5()" title="بزنجان Press: shift + t"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c6" onclick="myFunction6()" title="بقدونس Press: shift + y"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c7" onclick="myFunction7()" title="فجل Press: shift + u"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c8" onclick="myFunction8()" title="بصل Press: shift + i"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c9" onclick="myFunction9()" title="بطاطس Press: shift + o"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c10" onclick="myFunction10()" title="ليمون Press: shift + p"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c11" onclick="myFunction11()" title="****** Press: shift + a"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c12" onclick="myFunction12()" title="كرات Press: shift + s"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c13" onclick="myFunction13()" title="كرونب Press: shift + d"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c14" onclick="myFunction14()" title="****** Press: shift + f"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c15" onclick="myFunction15()" title="كوسة Press: shift + g"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c16" onclick="myFunction16()" title="ريحان Press: shift + h"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c17" onclick="myFunction17()" title="****** Press: shift + j"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c18" onclick="myFunction18()" title="جزر Press: shift + k"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c19" onclick="myFunction19()" title="عيش الغراب Press: shift + l"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c20" onclick="myFunction20()" title="طماطم Press: shift + z"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c21" onclick="myFunction21()" title="بسله Press: shift + x"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c22" onclick="myFunction22()" title="فول Press: shift + c"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c23" onclick="myFunction23()" title="خص Press: shift + v"></span>
				  <span class="img sp_VHDv9vKS1QB sx_254a8c24" onclick="myFunction24()" title="فلفل Press: shift + b"></span>
				  
                </div>
              </div>
            </div>
<script>
var myWindow ;
function myFunction1() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>نعنان</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction2() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>شبت</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction3() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>ملوخية</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction4() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>ثوم</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction5() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>بزنجان</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction6() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>بقدونس</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction7() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>فجل</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction8() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>بصل</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction9() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>بطاطس</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction10() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>ليمون</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction11() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>******</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction12() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>كرات</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction13() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>كرونب</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction14() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>******</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction15() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>كوسة</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction16() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>ريحان</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction17() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>******</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction18() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>جزر</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction19() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>عيش الغراب</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction20() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>طماطم</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction21() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>بسله</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction22() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>فول</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction23() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>خص</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 function myFunction24() {myWindow= window.open("", "MsgWindow", "width=380,height=250");myWindow.document.write("<p>فلفل</p>");myWindow.document.write("<p>Total Need : 900 million</p>");myWindow.document.write("<p>Total request : 900 need </p>"); }
 document.onkeyup = function(e) {
  if (e.shiftKey && e.which == 81) {myFunction1();} //q=81
  if (e.shiftKey && e.which == 87) {myFunction2();} //w=87
  if (e.shiftKey && e.which == 69) {myFunction3();} //e=69
  if (e.shiftKey && e.keyCode == 82) {myFunction4();} //r=82   *
  if (e.shiftKey && e.which == 84) {myFunction5();} //t=84
  if (e.shiftKey && e.which == 89) {myFunction6();} //y=89   *
  if (e.shiftKey && e.which == 85) {myFunction7();} //u=85
  if (e.shiftKey && e.which == 73) {myFunction8();} //i=73
  if (e.shiftKey && e.which == 79) {myFunction9();} //o=79
  if (e.shiftKey && e.which == 80) {myFunction10();}//p=80    *
  
  if (e.shiftKey && e.which == 65) {myFunction11();} //a=65
  if (e.shiftKey && e.which == 83) {myFunction12();} //s=83
  if (e.shiftKey && e.which == 68) {myFunction13();} //d=68
  if (e.shiftKey && e.which == 70) {myFunction14();} //f=70   *
  if (e.shiftKey && e.which == 71) {myFunction15();} //g=71
  if (e.shiftKey && e.which == 72) {myFunction16();} //h=72
  if (e.shiftKey && e.which == 74) {myFunction17();} //j=74    *
  if (e.shiftKey && e.which == 75) {myFunction18();} //k=75
  if (e.shiftKey && e.which == 76) {myFunction19();} //l=76    *
  if (e.shiftKey && e.which == 90) {myFunction20();}//z=90
  
  if (e.shiftKey && e.which == 88) {myFunction21();} //x=88
  if (e.shiftKey && e.which == 67) {myFunction22();} //c=67
  if (e.shiftKey && e.which == 86) {myFunction23();} //v=86
  if (e.shiftKey && e.which == 66) {myFunction24();}//b=66
};
</script>
			<div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title" dir="rtl">
                  <h style="
    font-size: 30px;
">محفظة العملات</h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="">الغاء دفع</a>
                        </li>
                        <li><a href="">عملية الدفع</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: block;">
                  <div style="background-color: rgba(23, 36, 45, 0.52);height: 230px;">
                      
                      <div width="150" height="80">
  <span style="font-size: 30px;">الجنية</span>
                        
                       
</div>
<div width="150" height="80" style="background: rgba(12, 100, 43, 0.52);">
  <span style="font-size: 15px;">1000000</span>
                        
                       
</div>
<div width="150" height="80">
<span style="font-size: 30px;">اليكوين</span>                
</div>
<div width="150" height="80" class="" style="background: rgba(12, 100, 43, 0.52);">
<span style="font-size: 15px;">500</span>
                       
</div>
                      
                    </div>
                </div>
              </div>
            </div>
<div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title" dir="rtl">
                  <h>تعديل الميزانية</h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="">خصائص</a>
                        </li>
                        <li><a href="">تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">دفع سنوى</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">مذكرة</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">تجديد الي</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">حفظ المستندات</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">تجديد الاشتراك</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">اضافات شهرية</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">تسجيل خروج</a>
                      </li>
                    </ul>
   <!-- modals -->
                  <!-- Large modal -->
                 
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">يقوم بتذكيرك أليآ</h4>
                        </div>
                        <div class="modal-body">
                        <div class="col-md-3">
						
                        <div class="daterangepicker xdisplay picker_1 single opensright show-calendar">
                          <div class="calendar first single right" style="display: block;">
                            <div class="calendar-date">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                                    </th>
                                    <th colspan="5" class="month">Mar 2013</th>
                                    <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                                    </th>
                                  </tr>
                                  <tr>
                                    <th>Su</th>
                                    <th>Mo</th>
                                    <th>Tu</th>
                                    <th>We</th>
                                    <th>Th</th>
                                    <th>Fr</th>
                                    <th>Sa</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="available off" data-title="r0c0">24</td>
                                    <td class="available off" data-title="r0c1">25</td>
                                    <td class="available off" data-title="r0c2">26</td>
                                    <td class="available off" data-title="r0c3">27</td>
                                    <td class="available off" data-title="r0c4">28</td>
                                    <td class="available" data-title="r0c5">1</td>
                                    <td class="available" data-title="r0c6">2</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r1c0">3</td>
                                    <td class="available" data-title="r1c1">4</td>
                                    <td class="available" data-title="r1c2">5</td>
                                    <td class="available" data-title="r1c3">6</td>
                                    <td class="available" data-title="r1c4">7</td>
                                    <td class="available" data-title="r1c5">8</td>
                                    <td class="available" data-title="r1c6">9</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r2c0">10</td>
                                    <td class="available" data-title="r2c1">11</td>
                                    <td class="available" data-title="r2c2">12</td>
                                    <td class="available" data-title="r2c3">13</td>
                                    <td class="available" data-title="r2c4">14</td>
                                    <td class="available" data-title="r2c5">15</td>
                                    <td class="available" data-title="r2c6">16</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r3c0">17</td>
                                    <td class="available active start-date end-date" data-title="r3c1">18</td>
                                    <td class="available" data-title="r3c2">19</td>
                                    <td class="available" data-title="r3c3">20</td>
                                    <td class="available" data-title="r3c4">21</td>
                                    <td class="available" data-title="r3c5">22</td>
                                    <td class="available" data-title="r3c6">23</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r4c0">24</td>
                                    <td class="available" data-title="r4c1">25</td>
                                    <td class="available" data-title="r4c2">26</td>
                                    <td class="available" data-title="r4c3">27</td>
                                    <td class="available" data-title="r4c4">28</td>
                                    <td class="available" data-title="r4c5">29</td>
                                    <td class="available" data-title="r4c6">30</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r5c0">31</td>
                                    <td class="available off" data-title="r5c1">1</td>
                                    <td class="available off" data-title="r5c2">2</td>
                                    <td class="available off" data-title="r5c3">3</td>
                                    <td class="available off" data-title="r5c4">4</td>
                                    <td class="available off" data-title="r5c5">5</td>
                                    <td class="available off" data-title="r5c6">6</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="calendar second left" style="display: none;">
                            <div class="calendar-date">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i>
                                    </th>
                                    <th colspan="5" class="month">Mar 2013</th>
                                    <th class="next available"><i class="fa fa-arrow-right icon icon-arrow-right glyphicon glyphicon-arrow-right"></i>
                                    </th>
                                  </tr>
                                  <tr>
                                    <th>Su</th>
                                    <th>Mo</th>
                                    <th>Tu</th>
                                    <th>We</th>
                                    <th>Th</th>
                                    <th>Fr</th>
                                    <th>Sa</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="available off" data-title="r0c0">24</td>
                                    <td class="available off" data-title="r0c1">25</td>
                                    <td class="available off" data-title="r0c2">26</td>
                                    <td class="available off" data-title="r0c3">27</td>
                                    <td class="available off" data-title="r0c4">28</td>
                                    <td class="available" data-title="r0c5">1</td>
                                    <td class="available" data-title="r0c6">2</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r1c0">3</td>
                                    <td class="available" data-title="r1c1">4</td>
                                    <td class="available" data-title="r1c2">5</td>
                                    <td class="available" data-title="r1c3">6</td>
                                    <td class="available" data-title="r1c4">7</td>
                                    <td class="available" data-title="r1c5">8</td>
                                    <td class="available" data-title="r1c6">9</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r2c0">10</td>
                                    <td class="available" data-title="r2c1">11</td>
                                    <td class="available" data-title="r2c2">12</td>
                                    <td class="available" data-title="r2c3">13</td>
                                    <td class="available" data-title="r2c4">14</td>
                                    <td class="available" data-title="r2c5">15</td>
                                    <td class="available" data-title="r2c6">16</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r3c0">17</td>
                                    <td class="available active start-date end-date" data-title="r3c1">18</td>
                                    <td class="available" data-title="r3c2">19</td>
                                    <td class="available" data-title="r3c3">20</td>
                                    <td class="available" data-title="r3c4">21</td>
                                    <td class="available" data-title="r3c5">22</td>
                                    <td class="available" data-title="r3c6">23</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r4c0">24</td>
                                    <td class="available" data-title="r4c1">25</td>
                                    <td class="available" data-title="r4c2">26</td>
                                    <td class="available" data-title="r4c3">27</td>
                                    <td class="available" data-title="r4c4">28</td>
                                    <td class="available" data-title="r4c5">29</td>
                                    <td class="available" data-title="r4c6">30</td>
                                  </tr>
                                  <tr>
                                    <td class="available" data-title="r5c0">31</td>
                                    <td class="available off" data-title="r5c1">1</td>
                                    <td class="available off" data-title="r5c2">2</td>
                                    <td class="available off" data-title="r5c3">3</td>
                                    <td class="available off" data-title="r5c4">4</td>
                                    <td class="available off" data-title="r5c5">5</td>
                                    <td class="available off" data-title="r5c6">6</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="ranges" style="display: none;">
                            <div class="range_inputs">
                              <div class="daterangepicker_start_input">
                                <label for="daterangepicker_start">From</label>
                                <input id="daterangepicker_start" class="input-mini" type="text" name="daterangepicker_start" value="">
                              </div>
                              <div class="daterangepicker_end_input">
                                <label for="daterangepicker_end">To</label>
                                <input id="daterangepicker_end" class="input-mini" type="text" name="daterangepicker_end" value="">
                              </div>
                              <button class="applyBtn btn btn-small btn-sm btn-success">Apply</button>&nbsp;
                              <button class="cancelBtn btn btn-small btn-sm btn-default">Cancel</button>
                            </div>
                          </div>
                        </div>


                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left active" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>

                      </div> </div>
                      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- Small modal -->
                 
                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Modal title</h4>
                        </div>
                       <div class="modal-body">
                        <form action="P2.php" method="post" class="form-horizontal form-label-left" novalidate="">
                      <div class="item form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style="
    width: 260px;
">
                        <input id="idpers" type="text" name="idpers" class="form-control" required="required" placeholder="رقم كارت البنك الخاص بك" value="">
                       <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
				 </div>
				  <div class="ln_solid"></div><div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" style="
    width: 260px;
">
                        <input id="idpers" type="text" name="idpers" class="form-control" required="required" placeholder="ادخل المبلغ" value="">
                        
						<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      
                    </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">اغلق</button>
                          <button type="button" class="btn btn-primary">اتمام العملية</button>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
                   
                  </div>
                </div>
              </div>
            </div>
          </div>


        <!-- /page content -->

        <!-- footer content -->
        <!--  <footer style="margin-left: 0px;margin-right: 230px;">
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->
      </div>
    </div>
	<div class="sidebar-widget" style="    position: fixed;
left: 83%;
    top: 67%;
    background-color: rgba(23, 36, 45, 0.52);
width: 145px;
    height: 165px;">
                      <h4 style="padding-left: 15px;">طمحات رفع الميزانية</h4>
                      <canvas width="150" height="80" id="foo" class="" style="width: 160px;height: 100px;padding-left: 0px;margin-left: 0px;"></canvas>
                      <div class="goal-wrapper">
                        <span class="gauge-value pull-left">L.E.</span>
                        <span id="gauge-text" class="gauge-value pull-left">1,000</span>
                        <span id="goal-text" class="goal-value pull-right">5,000 L.E.</span>
                      </div>
                    </div>
		<!-- </div> -->
    <!-- jQuery -->
	    <?php
			include('menu.php');
		?>
  	<script src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>
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
    <script src="./Gentallela Alela! __files/bootstrap-progressbar.min.js"></script>
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

     <script src="./Gentallela Alela! __files/jquery-jvectormap-world-mill-en.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery-jvectormap-us-aea-en.js.download"></script>
    <script src="./Gentallela Alela! __files/gdp-data.js.download"></script>


	   <!-- Custom Theme Scripts -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/custom.min.js"></script>
	<script src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>
	
 
	<!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- jVectorMap -->
   
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
          map: 'world_mill_en',
          backgroundColor: 'transparent',
          zoomOnScroll: false,
          series: {
            regions: [{
              values: gdpData,
              scale: ['#E6F2F0', '#149B7E'],
              normalizeFunction: 'polynomial'
            }]
          },
          onRegionTipShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    <!-- /jVectorMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: 'rgb(41, 64, 86)'
          },
          limitMax: 'false',
          colorStart: 'rgba(0, 0, 0, 0.29)',
          colorStop: 'rgba(0, 0, 0, 0.29)',
          strokeColor: 'rgba(240, 243, 243, 0.05)',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 5000;
      gauge.animationSpeed = 32;
      gauge.set(1000);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-23581568-13', 'auto');
    ga('send', 'pageview');

  </script>
<script>
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

     <script>
$("#nn li")
  .each(function(i) {
    if (i != 0) {
      $("#sound")
        .clone()
        .attr("id", "sound" + i)
        .appendTo($(this).parent());
    }
    $(this).data("beep", i);
  })
  .mouseenter(function() {
    $("#sound" + $(this).data("beep"))[0].play();
  });
$("#sound").attr("id", "sound0");


	
	$("#meg li")
  .each(function(i) {
    if (i != 0) {
      $("#so")
        .clone()
        .attr("id", "so" + i)
        .appendTo($(this).parent());
    }
    $(this).data("beep", i);
  })
  .mouseenter(function() {
    $("#so" + $(this).data("beep"))[0].play();
  });
$("#so").attr("id", "so0");
</script>
<!-- Edited -->
<style>
.dropdown-menu>li>a:hover {
    color: #262626;
    text-decoration: none;
    background-color: #6bb369;
}
</style>
<style>
    .sp_VHDv9vKS1QB {
    background-image: url(http://ebank.esy.es/test0.png);
    background-size: auto;
    background-repeat: no-repeat;
    display: inline-block;
    height: 32px;
    width: 32px;
	cursor: pointer;
}
span.img.sp_VHDv9vKS1QB.sx_254a8cCloth {background-position: 0 -34px;}
span.img.sp_VHDv9vKS1QB.sx_254a8celectronicsheet {background-position: 0 -66px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cmatrial {background-position: 0 -105px;}
span.img.sp_VHDv9vKS1QB.sx_254a8chealthy {background-position: 0 -145px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cshose {background-position: 0 -185px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cidea {background-position: 0 -215px;}
span.img.sp_VHDv9vKS1QB.sx_254a8ccars {background-position: 0 -245px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cgenerator {background-position: 0 -275px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cmachineagr {background-position: 0 -307px;}
span.img.sp_VHDv9vKS1QB.sx_254a8ccarshop {background-position: 0 -329px;}
span.img.sp_VHDv9vKS1QB.sx_254a8ccow {background-position: 0 -388px;}
span.img.sp_VHDv9vKS1QB.sx_254a8crecycle {background-position: 0 -417px;}
span.img.sp_VHDv9vKS1QB.sx_254a8chome {background-position: 0 -447px;}
span.img.sp_VHDv9vKS1QB.sx_254a8coiltogas {background-position: 0 -487px;}
span.img.sp_VHDv9vKS1QB.sx_254a8csheeps {background-position: 0 -517px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cnewgroundfood {background-position: 0 -557px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cmachine {background-position: 0 -587px;}
span.img.sp_VHDv9vKS1QB.sx_254a8celectrcell {background-position: 0 -617px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cchiken {background-position: 0 -647px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cfish {background-position: 0 -679px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cmachinebody {background-position: 0 -719px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cirrgationground {background-position: 0 -749px;}
span.img.sp_VHDv9vKS1QB.sx_254a8cengine {background-position: 0 -360px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c {background-position: 0 10px;}



span.img.sp_VHDv9vKS1QB.sx_254a8c1 {background-position: 0 -779px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c2 {background-position: -1px -810px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c3 {background-position: -1px -853px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c4 {background-position: -2px -882px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c5 {background-position: -2px -913px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c6 {background-position: -2px -947px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c7 {background-position: -2px -981px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c8 {background-position: -2px -1007px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c9 {background-position: -2px -1038px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c10 {background-position: -2px -1080px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c11 {background-position: -2px -1106px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c12 {background-position: -2px -1136px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c13 {background-position: -2px -1187px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c14 {background-position: -2px -1217px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c15 {background-position: -2px -1249px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c16 {background-position: -2px -1288px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c17 {background-position: -2px -1326px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c18 {background-position: -2px -1361px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c19 {background-position: -2px -1402px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c20 {background-position: -2px -1430px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c21 {background-position: -2px -1462px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c22 {background-position: -2px -1496px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c23 {background-position: -2px -1529px;}
span.img.sp_VHDv9vKS1QB.sx_254a8c24 {background-position: -2px -1586px;}

</style>
<style type="text/css" class="ng-binding ng-scope">@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
  font-family: Montserrat, sans-serif;
  background: #333333;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 17px;
  font-size: 12px;
  letter-spacing: 1px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 700;
  text-transform: uppercase;
}
#cssmenu > ul > li:hover > a {
  color: #ffffff;
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 30px;
}
#cssmenu > ul > li.has-sub > a:after {
  position: absolute;
  top: 22px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu > ul > li.has-sub > a:before {
  position: absolute;
  top: 19px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu > ul > li.has-sub:hover > a:before {
  top: 23px;
  height: 0;
}
#cssmenu ul ul {
  position: absolute;
  left: -9999px;
}
#cssmenu.align-right ul ul {
  text-align: right;
}
#cssmenu ul ul li {
  height: 0;
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu li:hover > ul {
  left: auto;
}
#cssmenu.align-right li:hover > ul {
  left: auto;
  right: 0;
}
#cssmenu li:hover > ul > li {
  height: 35px;
}
#cssmenu ul ul ul {
  margin-left: 100%;
  top: 0;
}
#cssmenu.align-right ul ul ul {
  margin-left: 0;
  margin-right: 100%;
}
#cssmenu ul ul li a {
  border-bottom: 1px solid rgba(150, 150, 150, 0.15);
  padding: 11px 15px;
  width: 170px;
  font-size: 12px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 400;
  background: #333333;
}
#cssmenu ul ul li:last-child > a,
#cssmenu ul ul li.last-item > a {
  border-bottom: 0;
}
#cssmenu ul ul li:hover > a,
#cssmenu ul ul li a:hover {
  color: #ffffff;
}
#cssmenu ul ul li.has-sub > a:after {
  position: absolute;
  top: 16px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu.align-right ul ul li.has-sub > a:after {
  right: auto;
  left: 11px;
}
#cssmenu ul ul li.has-sub > a:before {
  position: absolute;
  top: 13px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu.align-right ul ul li.has-sub > a:before {
  right: auto;
  left: 14px;
}
#cssmenu ul ul > li.has-sub:hover > a:before {
  top: 17px;
  height: 0;
}
#cssmenu.small-screen {
  width: 100%;
}
#cssmenu.small-screen ul {
  width: 100%;
  display: none;
}
#cssmenu.small-screen.align-center > ul {
  text-align: left;
}
#cssmenu.small-screen ul li {
  width: 100%;
  border-top: 1px solid rgba(120, 120, 120, 0.2);
}
#cssmenu.small-screen ul ul li,
#cssmenu.small-screen li:hover > ul > li {
  height: auto;
}
#cssmenu.small-screen ul li a,
#cssmenu.small-screen ul ul li a {
  width: 100%;
  border-bottom: 0;
}
#cssmenu.small-screen > ul > li {
  float: none;
}
#cssmenu.small-screen ul ul li a {
  padding-left: 25px;
}
#cssmenu.small-screen ul ul ul li a {
  padding-left: 35px;
}
#cssmenu.small-screen ul ul li a {
  color: #dddddd;
  background: none;
}
#cssmenu.small-screen ul ul li:hover > a,
#cssmenu.small-screen ul ul li.active > a {
  color: #ffffff;
}
#cssmenu.small-screen ul ul,
#cssmenu.small-screen ul ul ul,
#cssmenu.small-screen.align-right ul ul {
  position: relative;
  left: 0;
  width: 100%;
  margin: 0;
  text-align: left;
}
#cssmenu.small-screen > ul > li.has-sub > a:after,
#cssmenu.small-screen > ul > li.has-sub > a:before,
#cssmenu.small-screen ul ul > li.has-sub > a:after,
#cssmenu.small-screen ul ul > li.has-sub > a:before {
  display: none;
}
#cssmenu.small-screen #menu-button {
  display: block;
  padding: 17px;
  color: #dddddd;
  cursor: pointer;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
}
#cssmenu.small-screen #menu-button:after {
  position: absolute;
  top: 22px;
  right: 17px;
  display: block;
  height: 4px;
  width: 20px;
  border-top: 2px solid #dddddd;
  border-bottom: 2px solid #dddddd;
  content: '';
  box-sizing: content-box;
}
#cssmenu.small-screen #menu-button:before {
  position: absolute;
  top: 16px;
  right: 17px;
  display: block;
  height: 2px;
  width: 20px;
  background: #dddddd;
  content: '';
  box-sizing: content-box;
}
#cssmenu.small-screen #menu-button.menu-opened:after {
  top: 23px;
  border: 0;
  height: 2px;
  width: 15px;
  background: #ffffff;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
#cssmenu.small-screen #menu-button.menu-opened:before {
  top: 23px;
  background: #ffffff;
  width: 15px;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
#cssmenu.small-screen .submenu-button {
  position: absolute;
  z-index: 99;
  right: 0;
  top: 0;
  display: block;
  border-left: 1px solid rgba(120, 120, 120, 0.2);
  height: 46px;
  width: 46px;
  cursor: pointer;
}
#cssmenu.small-screen .submenu-button.submenu-opened {
  background: #262626;
}
#cssmenu.small-screen ul ul .submenu-button {
  height: 34px;
  width: 34px;
}
#cssmenu.small-screen .submenu-button:after {
  position: absolute;
  top: 22px;
  right: 19px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu.small-screen ul ul .submenu-button:after {
  top: 15px;
  right: 13px;
}
#cssmenu.small-screen .submenu-button.submenu-opened:after {
  background: #ffffff;
}
#cssmenu.small-screen .submenu-button:before {
  position: absolute;
  top: 19px;
  right: 22px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
}
#cssmenu.small-screen ul ul .submenu-button:before {
  top: 12px;
  right: 16px;
}
#cssmenu.small-screen .submenu-button.submenu-opened:before {
  display: none;
}
#cssmenu.small-screen.select-list {
  padding: 5px;
}
</style>
	</body>
	<!-- Edit-->
	<style>
	.navbar-nav .open .dropdown-menu {left: 0px !important;}
	.badge {position: absolute !important;top: 10px !important;left: 25px !important;}
	.nav_menu {position: fixed !important;z-index: 1 !important;background: rgb(42, 63, 84) !important;border-bottom: 0px !important;}
	#head {position: fixed !important;z-index: 2 !important;}
	.nav-sm .container.body .col-md-3.left_col { top: 60px !important;z-index: 1;}
	</style>
</html>