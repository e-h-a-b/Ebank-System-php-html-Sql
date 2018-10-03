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
   
 		<?php   
		$_GET['id'] = 21;
       include('visitor.php');
	   ?> 
 
  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
	  
     <?php include('Sidemenu.php'); ?>

		 <!-- top navigation -->
         <?php include('topmenu.php');?>
         <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 9773px;">          <!-- top tiles -->
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
			
            
            
            
            
            
            
		    
<div class="col-md-12" dir="rtl">

                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h>&#1575;&#1604;&#1576;&#1606;&#1603; &#1575;&#1604;&#1575;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1610; <small> &#1575;&#1587;&#1593;&#1575;&#1585; &#1575;&#1604;&#1582;&#1590;&#1585;&#1575;&#1608;&#1575;&#1578;  </small></h>
                    <ul class="nav navbar-left panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">&#1575;&#1604;&#1591;&#1604;&#1576;&#1575;&#1578;</a>
                          </li>
                          <li><a href="#">&#1575;&#1605;&#1603;&#1575;&#1606; &#1575;&#1604;&#1588;&#1585;&#1575;&#1569;</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">

                    <div class="row">

                      <p>&#1607;&#1584;&#1607; &#1575;&#1604;&#1575;&#1587;&#1593;&#1575;&#1585; &#1605;&#1582;&#1601;&#1590;&#1577; &#1580;&#1583;&#1575; &#1591;&#1576;&#1602;&#1575; &#1604;&#1583;&#1585;&#1575;&#1587;&#1575;&#1578;  &#1608;&#1575;&#1588;&#1578;&#1585;&#1603;&#1575;&#1578; &#1575;&#1593;&#1590;&#1575;&#1569; &#1575;&#1604;&#1576;&#1606;&#1603;</p>

                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://i1.wp.com/www.4nono.com/wp-content/uploads/2012/07/tomatoes.jpg" alt="image">
                            <div class="mask">
                              <p>&#1591;&#1605;&#1575;&#1591;&#1605;,&#1587;&#1604;&#1591;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1591;&#1605;&#1575;&#1591;&#1605;</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.hawaa.com/wp-content/uploads/2015/12/images_clb7.jpg" alt="image">
                            <div class="mask">
                              <p>&#1576;&#1589;&#1604;,&#1587;&#1604;&#1591;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1589;&#1604;</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://bed56888308e93972c04-0dfc23b7b97881dee012a129d9518bae.r34.cf1.rackcdn.com/sites/default/files/garlic_310_0.jpg" alt="image">
                            <div class="mask">
                              <p>&#1579;&#1608;&#1605;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1579;&#1608;&#1605;</p>
                          </div>
                        </div>
                      </div>
                     <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.mexatk.com/wp-content/uploads/2015/04/%D8%A7%D9%84%D9%84%D9%8A%D9%85%D9%88%D9%86-1.jpg" alt="image">
                            <div class="mask">
                              <p>&#1604;&#1610;&#1605;&#1608;&#1606;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1604;&#1610;&#1605;&#1608;&#1606;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.hayah.cc/forum/imgcache/190922.png" alt="image">
                            <div class="mask">
                              <p>&#1603;&#1585;&#1575;&#1578;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1603;&#1585;&#1575;&#1578;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://www.almawk3.com/wp-content/uploads/%D8%AC%D8%B1%D8%AC%D9%8A%D8%B1.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1580;&#1585;&#1580;&#1610;&#1585;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1580;&#1585;&#1580;&#1610;&#1585;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://www.almawk3.com/wp-content/uploads/%D8%A7%D9%84%D8%AE%D8%B3.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1582;&#1587;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1582;&#1587;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.alrihana.com/wp-content/uploads/2015/05/Carrot2-465x311.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1580;&#1586;&#1585;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1580;&#1586;&#1585;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.eg.all.biz/img/eg/catalog/97604.jpeg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1603;&#1586;&#1576;&#1585;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1603;&#1586;&#1576;&#1585;&#1577;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://almraah.net/imgcache2/576502.gif" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1602;&#1583;&#1608;&#1606;&#1587;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1576;&#1602;&#1583;&#1608;&#1606;&#1587;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.thaqafnafsak.com/wp-content/uploads/2015/01/%D8%AC%D9%87%D8%B2%D9%8A-%D9%85%D8%AE%D9%84%D9%84-%D8%A7%D9%84%D8%AE%D9%8A%D8%A7%D8%B1-%D9%81%D9%8A-%D8%A7%D9%84%D9%85%D9%86%D8%B2%D9%84-2.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1582;&#1610;&#1575;&#1585;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1582;&#1610;&#1575;&#1585;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://i.ytimg.com/vi/TI1P-uh0fNc/maxresdefault.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1575;&#1585;&#1586;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1575;&#1585;&#1586;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://akhbarelyom.com/img/posts/large/2016/02/03/mn5752af092c2ba1454506980.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1587;&#1604;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1587;&#1604;&#1577;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://static.jbcgroup.com/news/pictures/e8b749bf78c770e10b644142d945bad3.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1591;&#1575;&#1591;&#1587;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1591;&#1575;&#1591;&#1587;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://umbrellacrops.com/wp-content/uploads/2016/10/bean.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1601;&#1575;&#1589;&#1608;&#1604;&#1610;&#1575;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1601;&#1575;&#1589;&#1608;&#1604;&#1610;&#1575;</p>
                          </div>
                        </div>
                      </div>
                   <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.tpegypt.gov.eg/Arabic/CompCat.ashx?id=4817" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1601;&#1608;&#1604;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1601;&#1608;&#1604;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.almrsal.com/wp-content/uploads/2015/10/broad-beans-Optimized-500x198.jpg" alt="image">
                            <div class="mask">
                              <p> &#1575;&#1604;&#1575;&#1582;&#1590;&#1585;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1601;&#1608;&#1604; &#1575;&#1604;&#1575;&#1582;&#1590;&#1585;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.alborsanews.com/app/uploads/2015/10/1460091070_746151_478_96477_.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1601;&#1575;&#1589;&#1608;&#1604;&#1610;&#1575; &#1575;&#1604;&#1576;&#1610;&#1590;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1575;&#1604;&#1601;&#1575;&#1589;&#1608;&#1604;&#1610;&#1575; &#1575;&#1604;&#1576;&#1610;&#1590;&#1577;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.masralarabia.com/images/news/f1767ea73f98a66d40713c1d99b3d387.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1593;&#1583;&#1587;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1593;&#1583;&#1587;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://safhaa.com/media/images/16/01/16/b2616b32f9.png" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1603;&#1585;&#1606;&#1576;&#1610;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1575;&#1604;&#1603;&#1585;&#1606;&#1576;&#1610;&#1577;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.eg.all.biz/img/eg/catalog/71064.jpeg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1608;&#1576;&#1610;&#1575;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1608;&#1576;&#1610;&#1575;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.akhbaar.org/home/assets/images/big/okra_23022016.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1575;&#1605;&#1610;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1575;&#1605;&#1610;&#1577;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.almowaten.net/wp-content/uploads/%D8%A3%D8%B7%D8%A8%D8%AE_%D8%B3%D8%A8%D8%A7%D9%86%D8%AE.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1587;&#1576;&#1575;&#1606;&#1582;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1587;&#1576;&#1575;&#1606;&#1582;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://a.ctimg.net/BV9pJCfyTw612lO0AbfkVA/recipemolokhia-recipe.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1605;&#1604;&#1608;&#1582;&#1610;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1605;&#1604;&#1608;&#1582;&#1610;&#1577;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://img.3a2ilati.com/RmaBTWYq7o0n5ROFS78sK_lY5x4=/556x384/smart/http://harmony-assets-live.s3.amazonaws.com/image_source/6c/de/6cde908593d651f3c1b6949d456af16bab9c4f0e.jpg" alt="image">
                            <div class="mask">
                              <p>&#1608;&#1585;&#1602; &#1593;&#1606;&#1576;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1608;&#1585;&#1602; &#1593;&#1606;&#1576;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://3.bp.blogspot.com/-naFhbh1Vm8o/V4UHX_VxvlI/AAAAAAAANXM/63CfJG-CRwQ8C4N6fCnIJtRxbfUi-_eiQCLcB/s320/italian-eggplant.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1578;&#1606;&#1580;&#1575;&#1606;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1578;&#1606;&#1580;&#1575;&#1606;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.thaqafnafsak.com/wp-content/uploads/2014/09/Untitled001284.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1601;&#1604;&#1601;&#1604;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1601;&#1604;&#1601;&#1604;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.elhawanem.com/images/posts/7348_large.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1581;&#1605;&#1589;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1581;&#1605;&#1589;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.alghad.tv/wp-content/uploads/2015/11/%D8%A7%D9%84%D9%82%D9%85%D8%AD.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1602;&#1605;&#1581;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1588;&#1603;&#1575;&#1585;&#1577; &#1575;&#1604;&#1602;&#1605;&#1581;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.eg.all.biz/img/eg/catalog/43087.jpeg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1584;&#1585;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1588;&#1603;&#1575;&#1585;&#1577; &#1575;&#1604;&#1584;&#1585;&#1577;</p>
                          </div>
                        </div>
                      </div></div>





                   





                   </div></div></div>
  
  
  
  
  
     
 <div class="col-md-12" dir="rtl">

                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h>&#1575;&#1604;&#1576;&#1606;&#1603; &#1575;&#1604;&#1575;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1610; <small> &#1575;&#1587;&#1593;&#1575;&#1585; &#1575;&#1604;&#1601;&#1575;&#1603;&#1607;&#1577;  </small></h>
                    <ul class="nav navbar-left panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">&#1591;&#1604;&#1576;&#1575;&#1578;</a>
                          </li>
                          <li><a href="#">&#1575;&#1605;&#1575;&#1603;&#1606; &#1575;&#1604;&#1588;&#1585;&#1575;&#1569;</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">

                    <div class="row">

                      <p>&#1607;&#1584;&#1607; &#1575;&#1604;&#1575;&#1587;&#1593;&#1575;&#1585; &#1605;&#1582;&#1601;&#1590;&#1577; &#1580;&#1583;&#1575; &#1591;&#1576;&#1602;&#1575; &#1604;&#1583;&#1585;&#1575;&#1587;&#1575;&#1578;  &#1608;&#1575;&#1588;&#1578;&#1585;&#1603;&#1575;&#1578; &#1575;&#1593;&#1590;&#1575;&#1569; &#1575;&#1604;&#1576;&#1606;&#1603;</p>

                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://fotodes.ru/upload/img1341383360.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1603;&#1585;&#1610;&#1586;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1603;&#1585;&#1610;&#1586;</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://m.3bir.net/files/d66d27bb71.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1605;&#1575;&#1606;&#1580;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1605;&#1575;&#1606;&#1580;&#1577;</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.mubasherkfs.com/article/0c526c4e79-img.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1575;&#1606;&#1575;&#1606;&#1575;&#1587;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1575;&#1606;&#1575;&#1606;&#1575;&#1587;</p>
                          </div>
                        </div>
                      </div>
                     <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://image.made-in-china.com/2f0j00aMJTQuLPYAql/Sweet-Fresh-Navel-Orange.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1585;&#1578;&#1602;&#1575;&#1604;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1585;&#1578;&#1602;&#1575;&#1604;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Oh_my_darling.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1610;&#1608;&#1587;&#1601;&#1610;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1610;&#1608;&#1587;&#1601;&#1610;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://website.paaf.gov.kw/paaf/ershad/plants_images/F-31/G-33/1.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1588;&#1605;&#1575;&#1605;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1588;&#1605;&#1575;&#1605;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://beauty.bg/wp-content/uploads/kokos.jpg" alt="image">
                            <div class="mask">
                              <p>&#1580;&#1608;&#1586; &#1607;&#1606;&#1583;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1604;&#1610;&#1608; &#1580;&#1608;&#1586; &#1607;&#1606;&#1583;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://emilylhauserinmyhead.files.wordpress.com/2013/09/pomegranate-1000.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1585;&#1605;&#1575;&#1606;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1585;&#1605;&#1575;&#1606;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.bodyslimmingfast.com/wp-content/uploads/2014/05/ap.jpeg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1578;&#1601;&#1575;&#1581;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1578;&#1601;&#1575;&#1581;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://onaeg.com/wp-content/uploads/2014/04/%D8%A7%D8%B5%D9%81%D8%B1.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1605;&#1608;&#1586;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1605;&#1608;&#1586;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://bonnier.imgix.net/strawberry1-JBhgeUDW4DoWRZcZkhHbcw.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1601;&#1585;&#1575;&#1608;&#1604;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1601;&#1585;&#1575;&#1608;&#1604;&#1577;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://1.bp.blogspot.com/-vgwq5nJJiIE/VxecmzlJMQI/AAAAAAAAM78/4UzmrZTEf2kDqsb6jbc1L5_SJvnDCmEtwCLcB/s1600/grapes.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1593;&#1606;&#1576;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1593;&#1606;&#1576;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://pbs.twimg.com/media/BMv4cDECYAALX5h.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1585;&#1602;&#1608;&#1602;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1585;&#1602;&#1608;&#1602;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.mexatk.com/wp-content/uploads/2015/07/%D8%AE%D9%88%D8%AE-1-450x304.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1582;&#1608;&#1582;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1582;&#1608;&#1582;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.eg.all.biz/img/eg/catalog/30155.jpeg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1605;&#1588;&#1605;&#1588;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1605;&#1588;&#1605;&#1588;</p>
                          </div>
                        </div>
                      </div>
                   <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://media.cairodar.youm7.com/images/2015/05/%D8%A7%D9%84%D9%83%D8%A7%D9%83%D8%A7-.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1603;&#1575;&#1603;&#1575;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1603;&#1575;&#1603;&#1575;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.roro44.net/wp-content/uploads/2014/05/Fig-Mask.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1578;&#1610;&#1606;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1578;&#1610;&#1606;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.elfagr.org/upload/photo/news/219/2/500x500o/785.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1578;&#1610;&#1606; &#1575;&#1604;&#1588;&#1608;&#1603;&#1609;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1578;&#1610;&#1606; &#1575;&#1604;&#1588;&#1608;&#1603;&#1609;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://webdivs.com/demo/care/wp-content/uploads/2015/10/date.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1604;&#1581;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1604;&#1581;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.eg.all.biz/img/eg/catalog/71489.png" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1603;&#1605;&#1579;&#1585;&#1609;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1603;&#1605;&#1579;&#1585;&#1609;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://alalali-production-cliqueinteractiv.netdna-ssl.com/en/uploads/artical_images/93068_700x5255________________________________________________.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1580;&#1608;&#1575;&#1601;&#1577;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1580;&#1608;&#1575;&#1601;&#1577;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.alghad.com/files/284890.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1603;&#1610;&#1608;&#1609;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1603;&#1610;&#1608;&#1609;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.alchourouk.com/images/images_articles_2015/668_334_1435511009.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1578;&#1608;&#1578;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1578;&#1608;&#1578;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://www.anazahra.com/wp-content/uploads/2013/12/150749969-422x280.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1591;&#1610;&#1582;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1591;&#1610;&#1582;</p>
                          </div>
                        </div>
                      </div>
<div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://fotodes.ru/upload/img1341383360.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1603;&#1585;&#1610;&#1586;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1603;&#1585;&#1610;&#1586;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="https://dotmsrstaging.s3-eu-west-1.amazonaws.com/uploads/uploads/20512_11298280483.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1602;&#1589;&#1576;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1581;&#1586;&#1605;&#1577; &#1575;&#1604;&#1602;&#1589;&#1576;</p>
                          </div>
                        </div>
                      </div><div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="http://2.bp.blogspot.com/-ig1fJUNkNq0/UVwkBjisRaI/AAAAAAAAMOE/Jct1y0ur3aA/s1600/sweet-potato-1.jpg" alt="image">
                            <div class="mask">
                              <p>&#1575;&#1604;&#1576;&#1591;&#1575;&#1591;&#1575;</p>
                              <div class="tools tools-bottom">
                                <a href="#"><i class="fa fa-link"></i></a>
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <a href="#"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>&#1587;&#1593;&#1585; &#1603;&#1610;&#1604;&#1608; &#1575;&#1604;&#1576;&#1591;&#1575;&#1591;&#1575;</p>
                          </div>
                        </div>
                      </div></div>





                   





                   </div></div></div>

			
         
		 </div>
		  
		  </div>
          <!-- /top tiles -->

		  
		  
		  
		  
		  
		  
         <!--       
         <div class="pull-right">
            البنك الالكترونى المصري|e-ebank  <a href="">السميز بالكامل منColorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
         /footer content -->
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

<script  src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>

	
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
                nextElmLeft1 = $this.contentWidth + 10;
                nextElmLeft2 = 0;
                curElementLeft = 0 - _step($this, curStep).outerWidth();
            } else {
                nextElmLeft1 = 0 - _step($this, selStep).outerWidth() + 20;
                nextElmLeft2 = 0;
                curElementLeft = 10 + _step($this, curStep).outerWidth();
            }
            if (stepIdx == prevCurStepIdx) {
                nextElmLeft1 = $($(selStep, $this.target).attr("href"), $this.target).outerWidth() + 20;
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
    selected: 9,  // Selected Step, 0 = first step
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


	</body>
 
	


</html>