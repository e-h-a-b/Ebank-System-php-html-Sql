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
    <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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

  <body class="nav-md">
    <div class="container body">
      <div class="main_container"><div class="col-md-3 left_col" style="right: 0px;">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title" style="padding-left: 50px;"><span>البنك الالكتروني </span> <i class="fa fa-paw"></i></a>
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
      <div id="hh1" 
		 style="display:block;position:fixed;top: 96%;right:30%;width:45%;height:45px;"
		>
<input name="firstname" type="text" id="c" style="background: white;width: 45%;" onkeyup="convert()" value="" placeholder="أدخل كود الصفحة">
<input type="text" name="lastname" id="f" style="visibility:hidden">

<style>
#c {width:45%;position:fixed;}
#ty{position:fixed;}
</style> 
 </div> 
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
        <div class="right_col" role="main" style="min-height: 1732px; margin-right: 230px; margin-left: 0px;">          <!-- top tiles -->
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

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <ul class="stats-overview">
                        <li>
                          <span class="name"> Estimated budget </span>
                          <span class="value text-success"> 2300 </span>
                        </li>
                        <li>
                          <span class="name"> Total amount spent </span>
                          <span class="value text-success"> 2000 </span>
                        </li>
                        <li class="hidden-phone">
                          <span class="name"> Estimated project duration </span>
                          <span class="value text-success"> 20 </span>
                        </li>
                      </ul>
                      <br>

                      <div id="mainb" style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1480008063554"><div style="position: relative; overflow: hidden; width: 755px; height: 350px; cursor: default;"><canvas width="755" height="350" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 755px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.4s cubic-bezier(0.23, 1, 0.32, 1); background-color: rgba(0, 0, 0, 0.498039); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; font-family: Arial, Verdana, sans-serif; line-height: 21px; padding: 5px; left: 322px; top: 151px;">May<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#26B99A"></span>Revenue : 25.6<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#34495E"></span>Cash Input : 28.7<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#BDC3C7"></span>Time Spent : 6.3</div></div>

                      <div>

                        <h4>Recent Activity</h4>

                        <!-- end of user messages -->
                        <ul class="messages">
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">24</h3>
                              <p class="month">May</p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">Desmond Davison</h4>
                              <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                              <br>
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-error">21</h3>
                              <p class="month">May</p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">Brian Michaels</h4>
                              <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                              <br>
                              <p class="url">
                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                                <a href="#" data-original-title="">Download</a>
                              </p>
                            </div>
                          </li>
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">24</h3>
                              <p class="month">May</p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">Desmond Davison</h4>
                              <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                              <br>
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                              </p>
                            </div>
                          </li>
                        </ul>
                        <!-- end of user messages -->


                      </div>


                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                          <h2>Project Description</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                          <h3 class="green"><i class="fa fa-paint-brush"></i> Gentelella</h3>

                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                          <br>

                          <div class="project_detail">

                            <p class="title">Client Company</p>
                            <p>Deveint Inc</p>
                            <p class="title">Project Leader</p>
                            <p>Tony Chicken</p>
                          </div>

                          <br>
                          <h5>Project files</h5>
                          <ul class="list-unstyled project_files">
                            <li><a href=""><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                            </li>
                            <li><a href=""><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                            </li>
                            <li><a href=""><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                            </li>
                            <li><a href=""><i class="fa fa-picture-o"></i> Logo.png</a>
                            </li>
                            <li><a href=""><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                            </li>
                          </ul>
                          <br>

                          <div class="text-center mtop20">
                            <a href="#" class="btn btn-sm btn-primary">Add files</a>
                            <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                          </div>
                        </div>

                      </section>

                    </div>
                    <!-- end project-detail sidebar -->

                  </div>
                </div>
              </div>
            
          </div>
          <!-- /top tiles -->

		  
		  
		  
		  
		  
		  
                
          <div class="pull-right">
            البنك الالكترونى المصري|e-ebank  <a href="">السميز بالكامل منColorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   
    <!-- jQuery -->
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
    <script src="https://colorlib.com/polygon/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="https://colorlib.com/polygon/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<script src="https://colorlib.com/polygon/vendors/vendors/jquery/dist/jquery.min.js"></script>
<script src="https://colorlib.com/polygon/vendors/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/vendors/fastclick/lib/fastclick.js"></script>

<script src="https://colorlib.com/polygon/vendors/vendors/nprogress/nprogress.js"></script>

<script src="https://colorlib.com/polygon/vendors/build/js/custom.min.js"></script>

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
<div class="jvectormap-tip">
</div>
<div class="daterangepicker dropdown-menu opensleft show-calendar" style="top: 236px; right: 34.0781px; left: auto; display: none;">
<div class="calendar first left">
<div class="calendar-date">
<table class="table-condensed">
<thead>
<tr>
<th>
</th>
<th class="prev available">
<i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left">
</i>
</th>
<th colspan="5" class="month"><select class="monthselect">
<option value="0">January</option>
<option value="1">February</option>
<option value="2">March</option>
<option value="3">April</option>
<option value="4">May</option>
<option value="5">June</option>
<option value="6">July</option>
<option value="7">August</option>
<option value="8">September</option>
<option value="9" selected="selected">October</option>
<option value="10">November</option>
<option value="11">December</option>
</select><select class="yearselect">
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select></th><th></th></tr><tr>
<th class="week">W</th>
<th>Mo</th><th>Tu</th>
<th>We</th><th>Th</th>
<th>Fr</th><th>Sa</th>
<th>Su</th></tr></thead>
<tbody><tr><td class="week">40</td>
<td class="off disabled" data-title="r0c0">26</td>
<td class="off disabled" data-title="r0c1">27</td>
<td class="off disabled" data-title="r0c2">28</td>
<td class="off disabled" data-title="r0c3">29</td>
<td class="off disabled" data-title="r0c4">30</td>
<td class="off disabled" data-title="r0c5">1</td>
<td class="off disabled" data-title="r0c6">2</td>
</tr><tr><td class="week">41</td>
<td class="off disabled" data-title="r1c0">3</td>
<td class="off disabled" data-title="r1c1">4</td>
<td class="off disabled" data-title="r1c2">5</td>
<td class="off disabled" data-title="r1c3">6</td>
<td class="off disabled" data-title="r1c4">7</td>
<td class="off disabled" data-title="r1c5">8</td>
<td class="off disabled" data-title="r1c6">9</td>
</tr><tr><td class="week">42</td>
<td class="off disabled" data-title="r2c0">10</td>
<td class="off disabled" data-title="r2c1">11</td>
<td class="off disabled" data-title="r2c2">12</td>
<td class="off disabled" data-title="r2c3">13</td>
<td class="off disabled" data-title="r2c4">14</td>
<td class="off disabled" data-title="r2c5">15</td>
<td class="off disabled" data-title="r2c6">16</td>
</tr><tr><td class="week">43</td>
<td class="off disabled" data-title="r3c0">17</td>
<td class="off disabled" data-title="r3c1">18</td>
<td class="off disabled" data-title="r3c2">19</td>
<td class="off disabled" data-title="r3c3">20</td>
<td class="off disabled" data-title="r3c4">21</td>
<td class="off disabled" data-title="r3c5">22</td>
<td class="off disabled" data-title="r3c6">23</td>
</tr><tr><td class="week">44</td>
<td class="off disabled" data-title="r4c0">24</td>
<td class="off disabled" data-title="r4c1">25</td>
<td class="off disabled" data-title="r4c2">26</td>
<td class="off disabled" data-title="r4c3">27</td>
<td class="off disabled" data-title="r4c4">28</td>
<td class="off disabled" data-title="r4c5">29</td>
<td class="off disabled" data-title="r4c6">30</td>
</tr><tr><td class="week">45</td>
<td class="off disabled" data-title="r5c0">31</td>
<td class="off disabled" data-title="r5c1">1</td>
<td class="off disabled" data-title="r5c2">2</td>
<td class="off disabled" data-title="r5c3">3</td>
<td class="off disabled" data-title="r5c4">4</td>
<td class="off disabled" data-title="r5c5">5</td>
<td class="off disabled" data-title="r5c6">6</td>
</tr></tbody></table></div></div><div class="calendar second right">
<div class="calendar-date"><table class="table-condensed"><thead><tr><th></th>
<th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>
<th colspan="5" class="month"><select class="monthselect">
<option value="9">October</option><option value="10" selected="selected">November</option>
<option value="11">December</option></select><select class="yearselect"></select>
</th><th></th></tr><tr><th class="week">W</th>
<th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr>
<td class="week">45</td><td class="off disabled" data-title="r0c0">31</td>
<td class="off disabled" data-title="r0c1">1</td><td class="off disabled" data-title="r0c2">2</td>
<td class="off disabled" data-title="r0c3">3</td><td class="off disabled" data-title="r0c4">4</td>
<td class="off disabled" data-title="r0c5">5</td><td class="off disabled" data-title="r0c6">6</td>
</tr><tr><td class="week">46</td><td class="off disabled" data-title="r1c0">7</td>
<td class="off disabled" data-title="r1c1">8</td><td class="off disabled" data-title="r1c2">9</td>
<td class="off disabled" data-title="r1c3">10</td><td class="off disabled" data-title="r1c4">11</td>
<td class="off disabled" data-title="r1c5">12</td><td class="off disabled" data-title="r1c6">13</td>
</tr><tr><td class="week">47</td><td class="off disabled" data-title="r2c0">14</td>
<td class="off disabled" data-title="r2c1">15</td><td class="off disabled" data-title="r2c2">16</td>
<td class="off disabled" data-title="r2c3">17</td><td class="off disabled" data-title="r2c4">18</td>
<td class="off disabled" data-title="r2c5">19</td><td class="off disabled" data-title="r2c6">20</td>
</tr><tr><td class="week">48</td><td class="off disabled" data-title="r3c0">21</td>
<td class="off disabled" data-title="r3c1">22</td><td class="off disabled" data-title="r3c2">23</td>
<td class="off disabled" data-title="r3c3">24</td><td class="off disabled" data-title="r3c4">25</td>
<td class="off disabled" data-title="r3c5">26</td><td class="off disabled" data-title="r3c6">27</td>
</tr><tr><td class="week">49</td><td class="off disabled" data-title="r4c0">28</td>
<td class="off disabled" data-title="r4c1">29</td><td class="off disabled" data-title="r4c2">30</td>
<td class="off disabled" data-title="r4c3">1</td><td class="off disabled" data-title="r4c4">2</td>
<td class="off disabled" data-title="r4c5">3</td><td class="off disabled" data-title="r4c6">4</td>
</tr><tr><td class="week">50</td><td class="off disabled" data-title="r5c0">5</td>
<td class="off disabled" data-title="r5c1">6</td><td class="off disabled" data-title="r5c2">7</td>
<td class="off disabled" data-title="r5c3">8</td><td class="off disabled" data-title="r5c4">9</td>
<td class="off disabled" data-title="r5c5">10</td><td class="off disabled" data-title="r5c6">11</td>
</tr></tbody></table></div></div>
<div class="ranges"><ul><li class="active">Custom</li></ul><div class="range_inputs"><div class="daterangepicker_start_input">
<label for="daterangepicker_start">From</label>
<input class="input-mini" type="text" name="daterangepicker_start" value="">
</div><div class="daterangepicker_end_input"><label for="daterangepicker_end">To</label>
<input class="input-mini" type="text" name="daterangepicker_end" value=""></div>
<button class="applyBtn btn btn-default btn-small btn-primary">Submit</button>&nbsp;<button class="cancelBtn btn btn-default btn-small">Clear</button>
</div></div></div></body></html>