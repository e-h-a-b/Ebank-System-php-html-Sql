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
    <div class="container body">
      <div class="main_container"><div class="col-md-3 left_col" style="right: 0px;">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title" ><span>البنك الالكتروني </span> <i class="fa fa-paw"></i></a>
            </div>

    <div id="flb-lightbox" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 1000; box-sizing: content-box; display: none;">
<div id="flb-lightbox-background" style="width: 100%; height: 100%; background-color: #000; opacity:0.8; box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"></div><div id="flb-lightbox-content" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background: none; text-align: center; box-sizing: content-box; display: none;"><img id="flb-close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABBJREFUeNpi+P//PwNAgAEACPwC/tuiTRYAAAAASUVORK5CYII=" width="25px" height="25px" alt="Close" style="margin-top: 73.5px; margin-left: 475px;box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"><br><img src="x-demo-images/1.gif" id="flb-lightbox-image" style="border: 10px solid rgb(255, 255, 255); box-sizing: content-box; width: 0px; height: 430px; opacity: 0; display: inline-block;"></div><div id="flb-load" style="position: fixed; top: 40%; left: 0px; width: 100%; text-align: center; font-size: 14px; color: #fff; opacity: 0.3; box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;"></div><div id="flb-load2" style="position: fixed; top: 40%; left: 0px; width: 100%; text-align: center; font-size: 14px; color: #fff; opacity: 0.3;"></div></div>
          <br>
            <div class="clearfix"></div>

             <!-- menu profile quick info -->
           <div class="profile" style="width: 230px;">

     
              <div class="profile_pic">
              <img src="<?php echo $userRow['userpic'];?>" alt="..." class="img-circle profile_img" style="height: 102px;margin-top: 0px;width: 100px;">
			  </div>
              <div class="profile_info">
                <span>مرحبا,</span>
                <h2><?php echo $userRow['userName'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br>

           <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section active">
                <h3>عــــــام</h3>
                <ul class="nav side-menu" style="">
                  <li class=""><a><i class="fa fa-home"></i> الرئيسية <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
				<li><a href="http://ebank.esy.es/pm/profile.php?userName=<?php echo  urlencode($userRow['userName']); ?>">الصفحة الشخصية</a></li>
                  
					<li ><a href="http://ebank.esy.es/login/profile.php">الصفحة العامة</a></li>
                        <li><a href="http://ebank.esy.es/login/allproject.php">المشروعات المشترك بها</a></li>
                      <li><a href="http://ebank.esy.es/login/P1.php">احصائيات الارباح السنوية</a></li>
                       <li><a href="http://ebank.esy.es/login/yourinfo.php">الملف الشخصي</a></li>
                    <li><a href="http://ebank.esy.es/login/n.php">الاصدقـــاء</a></li>
					 <li><a href="http://ebank.esy.es/login/inbox.php">الرسائل</a></li>
                     </ul>
                  </li>
                  <li class=""><a><i class="fa fa-edit"></i> ملف جديد <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li class="current-page"><a href="http://ebank.esy.es/login/P2.php">ادخال مبلغ</a></li>
                     <li><a href="http://ebank.esy.es/login/P3.php">اشترك باستبيان</a></li>
                      <li><a href="http://ebank.esy.es/login/P4.php">اشترك بمصنع</a></li>
                      <li><a href="http://ebank.esy.es/login/P5.php">اشترك بقطة ارض</a></li>
					  <li><a href="http://ebank.esy.es/login/P23.php">اشترك بمقترح</a></li>
                      <li><a href="http://ebank.esy.es/login/P6.php">اشترك باشياء اخري</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> استعلامات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="http://ebank.esy.es/login/P7.php">استعلام عن المشروعات</a></li>
                      <li><a href="http://ebank.esy.es/login/P9.php">استعلام عن الموقع</a></li>
                      <li><a href="http://ebank.esy.es/login/P8.php">استعلام عن منتجات</a></li>
                      <li><a href="http://ebank.esy.es/login/P16.php">استعلام عن رقم الخاص بالبنك</a></li>
                      <li><a href="http://ebank.esy.es/login/P9.php">استعلام عن الدفع الشهري</a></li>
                      <li><a href="http://ebank.esy.es/login/P10.php">استعلام عن الخدمات</a></li>
                      <li><a href="http://ebank.esy.es/login/p17.php">استعلام عن  بدء العمل</a></li>
                      <li><a href="http://ebank.esy.es/login/P11.php">استعلام عن استخدام الموقع</a></li>
					  <li><a href="http://ebank.esy.es/login/p22.php">استعلامات الوظائف</a></li>
                      <li><a href="http://ebank.esy.es/login/p18.php">استعلامات اخري</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> جداول <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="http://ebank.esy.es/login/P12.php">جداول المشروعات</a></li>
                      <li><a href="http://ebank.esy.es/login/p19.php">جداول الارباح</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> البيانات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="http://ebank.esy.es/login/P13.php">بيانات السنوية</a></li>
                      <li><a href="http://ebank.esy.es/login/P14.php">بيانات الايداع</a></li>
                      <li><a href="http://ebank.esy.es/login/P15.php">بيانات السحب</a></li>
                      <li><a href="http://ebank.esy.es/login/p20.php">بيانات الاعضاء</a></li>
                      <li><a href="http://ebank.esy.es/login/p21.php">بيانات المشروعات</a></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
           

            </div>
            <!-- /sidebar menu -->
		
              
           <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
              
            </div>
            <!-- /menu footer buttons -->
           <script src="./Gentallela Alela! __files/codepg.js"></script>
      <!-- <div id="hh1" 
		 style="display:block;position:fixed;top: 96%;right:30%;width:45%;height:45px;"
		>
<input name="firstname" type="text" id="c" style="background: white;width: 45%;" onkeyup="convert()" value="" placeholder="أدخل كود الصفحة">
<input type="text" name="lastname" id="f" style="visibility:hidden">

<style>
#c {width:45%;position:fixed;}
#ty{position:fixed;}
</style> 
 </div>  -->
            <!-- /menu footer buttons -->
          
        </div>
        <!-- top navigation -->
        <div class="top_nav" style="margin-left: 0px;width: 100%;">
     
<div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-left" style="margin-left: 90px;">
                <li class="">
                   <a href="http://ebank.esy.es/chat/chat.html" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <img src="<?php echo $userRow['userpic'];?>" alt="Avatar" style="max-width:100px;max-height:100px;" />
    	                <?php echo  $userRow['userName']; ?>                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-left">
                    <li><a href="javascript:;"> الملف الشخصي</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>خصائص</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">مساعدة</a></li>
                    <li><a href="logout.php?logout"><i class="fa fa-sign-out pull-right"></i> تسجيل خروج</a></li>
                  </ul>
                </li>

                <div class="ui-pnotify dark ui-pnotify-fade-normal ui-pnotify-in ui-pnotify-fade-in ui-pnotify-move" aria-live="assertive" aria-role="alertdialog" style="display: none; width: 300px; right: 36px; top: 36px; cursor: auto;"><div class="alert ui-pnotify-container alert-info ui-pnotify-shadow" role="alert" style="min-height: 16px;"><div class="ui-pnotify-closer" aria-role="button" tabindex="0" title="Close" style="cursor: pointer; visibility: hidden; display: none;"><span class="glyphicon glyphicon-remove"></span></div><div class="ui-pnotify-sticker" aria-role="button" aria-pressed="true" tabindex="0" title="Unstick" style="cursor: pointer; visibility: hidden; display: none;"><span class="glyphicon glyphicon-play" aria-pressed="true"></span></div><div class="ui-pnotify-icon"><span class="glyphicon glyphicon-info-sign"></span></div><h4 class="ui-pnotify-title">PNotify</h4><div class="ui-pnotify-text" aria-role="alert">Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.</div></div></div>
<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">0</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="http://ebank.esy.es/login/inbox.php">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>عبد الله</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                        بارك الله فيك ووافقك الله لما فية نفعا للمسلمين
					   </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>رسالة البنك</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                          لقد نجئshy; المشروع ووصلت اربائshy;ك الى 1500 جنية
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>مئshy;مود ائshy;مد</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                          ياض اعلى بقولك ياض انا اشتركت فى المشروع اربائshy;ى هتبقى امتى ياله
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>عماد مئshy;مد</span>
                          <span class="time">منذ 3 دقائق</span>
                        </span>
                        <span class="message">
                          اعلى متنساش ياض ندخل المشروع دا ياض انا وانت وننزل نفعا البلد بقى ياله
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a href="http://ebank.esy.es/login/inbox.php">
                          <strong>اظهر جميع الرسائل</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
<script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
  document.getElementById("20000").onclick = function () {
    location.href = "http://ebank.esy.es/chat/chat.html";
};
</script>
                </li><li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-wechat" id="wwbchat"></i>
                    
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات المدير</span>
                          <span class="time">شات خاص برئيس البنك</span>
                        </span>
                        <span class="message">حتى تدلي بالمشكلات او المقترحات او تعديلات</span>
                      </a>
                    </li><li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات العام</span>
                          <span class="time">كل الاعضاء فى هذا الشات</span>
                        </span>
                        <span class="message">الهدف من الشات هو التفاعل بين جميع الاعضاء</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات الشركات</span>
                          <span class="time"> اصحاب الشركات فى هذا الشات</span>
                        </span>
                        <span class="message">حتى يتمكن اصحاب الشركات من تبادل المنفعة والتعاون وربط التجارات</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://ebank.esy.es/chat/chat.html">
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>شات المشاريع</span>
                          <span class="time">كل مشتركين فى المشريع</span>
                        </span>
                        <span class="message">حتى يتناول جميع المشتركين قضايا المشروع ورفع كفائتة</span>
                      </a>
                    </li>
                    
                    
                  </ul>
</li><li role="presentation" class="dropdown">
              <a href="https://www.facebook.com/%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%89-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A-319963795063101/"  target="_blank" title="البنك الالكترونى المصري">
  <i class="fa fa-facebook"></i>

</a>
                </li>
                
              </ul>
            </nav>
          </div>
	 </div>
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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
                      </div><div class="col-md-55">
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

	
		
		<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style.css" />
<script scr="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<meta name="viewport" content="width=device-width">
		<script>$(document).ready(function(){$(".collapse-link").on("click",function(){var a=$(this).closest(".x_panel"),b=$(this).find("i"),c=a.find(".x_content");a.attr("style")?c.slideToggle(200,function(){a.removeAttr("style")}):(c.slideToggle(200),a.css("height","auto")),b.toggleClass("fa-chevron-up fa-chevron-down")}),$(".close-link").click(function(){var a=$(this).closest(".x_panel");</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style>
.companyRollover {
    cursor: pointer;
    
}
.companyData {
    position: absolute;
    background-color: rgba(40, 51, 53, 0.84);
    border: 2px solid gray;
    padding: 10px;
    box-shadow: 2px 1px 2px gray;
    z-index: 10;
	display: block;
	top: 210%;
	left: 1%;
}

  </style>
	  <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script src="popover.js"> </script>
 <script>
  $(document).ready(function() {
    $("div.companyData").hide();
    $("div.companyDataTriangle").hide();
    $("span.companyRollover").mouseover(function(evt) {
        var id = $(this).attr("id");
        var $companyData = $("div.companyData[data-ticker='" + id + "']");
        $companyData
                .css({ top: evt.pageY + 500, left: evt.pageX-5 })
                .toggle(0);
        $("div.companyDataTriangle")
                .css({ top: evt.pageY + 18, left: evt.pageX-12 })
                .toggle(0);
    });
});  
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
	
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	
		<section class="drawer" style="height: 272px;z-index: 9;">
		<!-- <div>  -->
			<header class="clickme" style="background: #2a3f54;">القائمة</header>
		<!-- </div> -->
		<div class="drawer-content" style="border-top: 1px solid #2a3f54;height: 230px;">
		<script>
       for(var i = 0; i <= 2; i++){
    $('#newgall li:nth-child(' + i + ')').addClass('curr');    
}
$('#newgall li:not(.curr)').hide();

var slide = function () {
    var Act_curr = $('#newgall li.curr:eq(0)');
    var newItem = $('#newgall li.curr:eq(1)');

    Act_curr.hide().removeClass('curr');

    if (newItem.next()[0] && newItem.next()[0].nodeName == 'LI') {
        newItem.next().show('fade').addClass('curr');
    } else {
        $('#newgall .curr').removeClass('curr').hide();
        $('#newgall li:first').addClass('curr').show('fade');
        $('#newgall li:nth-child(2)').addClass('curr').show('fade');
      
    }
    setTimeout(slide, 4500);
};

slide();
    </script>
			<style>
.n01 {
    margin: 1px 0;
    padding: 18px 0;
    height:240px;
    width:250px;
position:absolute;
left:-5px;
top:930px;
   /* border:1px solid #333;*/
    border-left-width: 1px;
    margin-left: 1px;
}

.newsblock {
    margin: 3px 0;
    padding: 1px 0;
    height:110px;
    width:200px;
    border:1px solid #333;

    left: 0px;
    top: 5px;
}
#newcompgall {
    list-style: none;
    padding: 0px;
    margin: 0px;
}

</style>
			<div class="n01" style="top: 0px;left:-5;right:20px;width: 30%;">


<ul dir="ltr" id="newgall" style="padding-left: 5px;padding-right: 5px;margin-top: 10px;">
<li class="" style="display: none;">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
          Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="https://unsplash.it/640/420/?random" width="92"></div>
</div>
</li>
<li class="" style="display: none;">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
           Area =16 m2 , 24 Flate <br>
<img alt="Premium wordpress themes" height="78" src="https://unsplash.it/640/418/?random" width="92">
</div>
</div>
</li>
<li style="display: none;" class="">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
          Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="https://unsplash.it/640/421/?random" width="92"></div>
</div>
</li>
<li style="display: list-item;" class="curr">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
         Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="https://unsplash.it/640/419/?random" width="92"></div>
</div>
</li>
<li style="display: list-item;" class="curr">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
           Area =16 m2 , 24 Flate<br>
<img alt="Premium wordpress themes" height="78" src="https://unsplash.it/640/422/?random" width="92"></div>
</div>
</li>
<li style="display: none;" class="">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';">
<div class="idrt">
          Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="https://unsplash.it/640/426/?random" width="92"></div>
</div>
</li>
</ul><!-- <script> $('#newgall li:first').addClass('curr'); $('#newgall li:not(:first)').hide(); var slide = function(){ var Act_curr = $('#newgall li.curr'); Act_curr.hide().removeClass('curr'); if (Act_curr.next()[0] &amp;&amp; Act_curr.next()[0].nodeName == 'LI') { Act_curr.next().show('fade').addClass('curr'); } else { $('#newgall li:first').addClass('curr').show('fade'); } setTimeout(slide, 4500); } slide(); </script>-->

</div>
	
			<div class="drawer-items">
<input type="text" name="lastname" id="f" style="visibility:hidden">
		<input name="firstname" type="text" id="c" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" onkeyup="convert()" value="" placeholder="أدخل كود الصفحة">
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
			
<style>


/**
 * General styles
 */


* { box-sizing: border-box; }

html, body {
  margin: 0;
  padding: 0;
}

html { background-color: #53565a; }

/**
 * Carousel container
 */


.carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 50vh;
}

.carousel {
  position: relative;
  overflow: hidden;
  width: 930px;
  
}

.roll {
  position: relative;
  white-space: nowrap;
  font-size: 0;
  left: 0px;
}

.slides {
  width: 300px;
  height: 165px;
  background-color: rgba(40, 51, 53, 0.84);
  -webkit-box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
  -moz-box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
  box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.5);
  text-align: center;
  margin: 0 10px 15px 0;
  display: inline-block;
  font-size: 10px;
}

.slides img {
  margin-top: 10px;
  width: 180px;
  height: 100px;
}

.slides p {
  margin: 10px;
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 10;
  text-align: left;
  white-space: normal;
}

.sections {
  text-align: center;
  color: #b4fdc0;
  font-size: 12px;
}

.sections i {
  margin: 0 2px;
  cursor: pointer;
}

.navigation {
  position: absolute;
  border: none;
  padding: 0;
  background-color: rgba(35,35,35,0.8);
  height: 34px;
  width: 34px;
  color: #FFF;
  font-size: 20px;
  text-align: center;
  top: 50px;
  z-index: 10;
}

.navigation:visited { text-decoration: none; }

.navigation-hover {
  height: 50px;
  width: 50px;
  top: 50px;
}

.navigation:active { text-decoration: none; }

.navigation:focus { outline: none; }

.navigation:first-of-type { left: 0px; }

.navigation:last-of-type { right: 10px; }
 @media screen and (max-width: 100%) {

.carousel {
  position: relative;
  overflow: hidden;
  width: 620px;
}
}
@media screen and (max-width: 50%) {

.carousel {
  position: relative;
  overflow: hidden;
  width: 310px;
}
}

</style>
<div class="carousel">
			<div class="roll">
				<div class="slides">
					<img src="https://unsplash.it/640/426/?random" alt="slides img 1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/425/?random" alt="slides img 2">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/424/?random" alt="slides img 3">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/423/?random" alt="slides img 4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/422/?random" alt="slides img 5">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/421/?random" alt="slides img 6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/420/?random" alt="slides img 7">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/419/?random" alt="slides img 8">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
				<div class="slides">
					<img src="https://unsplash.it/640/418/?random" alt="slides img 9">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia in mi a rhoncus. Suspendisse maximus leo ac lorem interdum volutpat.</p>
				</div>
			</div>
			<div class="sections"><i class="fa fa-circle indicator" data-id="1" aria-hidden="true"></i><i class="fa fa-circle-thin indicator" data-id="2" aria-hidden="true"></i><i class="fa fa-circle-thin indicator" data-id="3" aria-hidden="true"></i></div>
			<button class="navigation" id="nav-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
			<button class="navigation" id="nav-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
		</div>
					
<script>
var currentSection = 1;
var sections;

$('document').ready(function () {
	setCurrentSection();
	setSectionIndicator(1);
	$('.navigation').click(function () {
		if (this.id == "nav-left") { 
			if (currentSection != 1) {
				scrollToSection(currentSection - 1);
				$('#nav-left').prop('disabled', true);
			}
		}
		else  {
			if (currentSection+1 <= sections) {
				scrollToSection(currentSection + 1);
				$('#nav-right').prop('disabled', true);
			}
		}
	});

	$('.navigation').on('mouseover', function() {
		if (this.id == 'nav-left') {
			if (currentSection != 1) $(this).addClass('navigation-hover');
		} else {
			if (currentSection+1 <= sections) $(this).addClass('navigation-hover');
		}
	}).on('mouseout', function () {
		$(this).removeClass('navigation-hover');
	});

	$(window).resize(function() {
		setCurrentSection();
		setSectionIndicator(currentSection);
	});

});

function setCurrentSection() {
	var carouselWidth = $('.carousel').width();
	var slidesWidth = $('.slides').width() + parseInt($('.slides').css('margin-right').replace('px',''));
	var slidessQtt = $('.slides').size();
	var slidessPerSection = carouselWidth / slidesWidth;
	sections = Math.round(slidessQtt / slidessPerSection);
	var rollLeft = Math.abs(parseInt($('.roll').css('left').replace('px','')));
	if (rollLeft == 0) currentSection = 1;
	else {
		currentSection = Math.round((rollLeft / carouselWidth) + 1);
	}
	$('#nav-left').prop('disabled', false);
	$('#nav-left').removeClass('navigation-hover');
	$('#nav-right').prop('disabled', false);
	$('#nav-right').removeClass('navigation-hover');
}

function scrollToSection(section) {
	var width = $('.carousel').width() * (Math.abs(currentSection - section));
	if (section < currentSection) {
		$('.roll').animate({left: '+='+width}, "slow", setCurrentSection);
	} else {
		$('.roll').animate({left: '-='+width}, "slow", setCurrentSection);
	}
	setSectionIndicator(section);
}

function setSectionIndicator(section) {
	$('.sections').html('');
	for (var i = 1; i <= sections; i++) {
		if (i == section) circleClass = 'fa fa-circle';
		else circleClass = 'fa fa-circle-thin';
		$('.sections').html($('.sections').html() + '<i class="'+circleClass+' indicator" data-id="'+i+'" aria-hidden="true"></i>');
	}
	$('.indicator').click(function() {
		scrollToSection($(this).attr('data-id'));
	});
}


</script>
			</div>	
		<style type="text/css">

.thumbnails img {
left:80%;
  height: 20px;
border: 1px solid #555;
padding: 1px;
margin: 0 10px 10px 0;
}
.thumbnails img:hover {
border: 1px solid #00ccff;
cursor:pointer;
}
 </style>
		<div class="thumbnails" style="margin-top: 6px;width: 90%;height: 28px;">
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img1" onmouseover="preview.src=img1.src" src="https://unsplash.it/640/421/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/426/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/423/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/422/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/420/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/419/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/418/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/425/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img3" onmouseover="preview.src=img3.src" src="https://unsplash.it/640/424/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img4" onmouseover="preview.src=img4.src" src="https://unsplash.it/640/426/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img1" onmouseover="preview.src=img1.src" src="https://unsplash.it/640/421/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/426/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/423/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/422/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/420/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/419/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/418/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/425/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img3" onmouseover="preview.src=img3.src" src="https://unsplash.it/640/424/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img4" onmouseover="preview.src=img4.src" src="https://unsplash.it/640/426/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img1" onmouseover="preview.src=img1.src" src="https://unsplash.it/640/421/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/426/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/423/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/422/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/420/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/419/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/418/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://unsplash.it/640/425/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img3" onmouseover="preview.src=img3.src" src="https://unsplash.it/640/424/?random"></span>
<span class="companyRollover" id="OST"><img alt="Image Not Loaded" name="img4" onmouseover="preview.src=img4.src" src="https://unsplash.it/640/426/?random"></span>
<br>
</div>
		</div>
	</section>
	<script>
	$(function(){
		$('.drawer').slideDrawer({
			showDrawer: false,
			// slideTimeout: true,
			slideSpeed: 600,
			slideTimeoutCount: 3000,
		});
	});
	</script>


	
  <div class="companyData" data-ticker="OST" data-price="100" style="display: block;
	top: 210%;
	left: 1%;">
    <h2>O'Reilly School of Technology (OST)</h2>
    <h3>U.S.: Fake Nasdaq</h3>
    <p>Stock Price: $100</p>
    <h3>Recent Articles</h3>
    <ul>
      <li><a href="http://blog.oreillyschool.com/2012/09/ost-author-has-a-close-encounter-on-mars-with-the-rover-curiosity.html">Close Encounter with Mars Rover</a></li>
      <li><a href="http://blog.oreillyschool.com/2012/04/automatic-grading-misses-the-point.html">Automatic grading misses the mark</a></li>
    <video width="400" controls>
  <source src="http://ebank.esy.es/mov_bbb.mp4" type="video/mp4">
  <source src="http://ebank.esy.es/mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
  </video>
	
	
	</ul>
 





  </div>
  <div class="companyDataTriangle">
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
  </body>

</html>