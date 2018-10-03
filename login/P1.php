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
<!-- NProgress -->
	<link href="https://colorlib.com/polygon/vendors/nprogress/nprogress.css" rel="stylesheet">

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
		$_GET['id'] = 9;
       include('visitor.php');
	   ?> 
 
  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
     <?php include('Sidemenu.php'); ?>
 <!-- top navigation -->
      <?php
			include('topmenu.php');
		?>
 <!-- /top navigation -->
 
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1732px;  ">          <!-- top tiles -->
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
          <!-- /top tiles -->

		  
		  
		  
		<div class="right_col0" role="main" style="min-height: 1362px; ">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count">3</div>
                  <h3><a href="#tab_content34" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">شروحات</a></h3>
                  <p>تابع رصيدك من الشروحات</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">179</div>
                  <h3><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">الاشتركات</a></h3>
                  <p>تابع رصيدك من الاشتركات</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count">10</div>
                  <h3><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">مقتـــرح</a></h3>
                  <p>تابع رصيدك من الاقتراحات</p>
                </div>
              </div>
              
<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">179</div>
                  <h3><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">مطلوب خدمة</a></h3>
                  <p>تابع رصيدك من الخدمات</p>
                </div>
              </div>



            </div>

            



            
</br>
<div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                     
                      <div id="myTabContent2" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content33" aria-labelledby="home-tab">
<div class="col-md-9 col-sm-12 col-xs-12" style=" width: 100%;background-color: rgba(206, 228, 230, 1);">
 
<div id="mainb" style="height: 400px; -webkit-tap-highlight-color: red; user-select: none; position: relative; background-color: rgba(206, 228, 230, 1);" >
<div style="position: relative; overflow: hidden; width: 755px; height: 350px; cursor: default;">
<canvas width="755" height="400" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 755px; height: 440px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
</div>
</div>
</div></div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>المقترحات</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">خصائص</a>
                          </li>
                          <li><a href="#">تنزيل</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>قائمة بمقترحاتك فى كافة المشاريع</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">كود المشروع</th>
                          <th>مدراء المشروع</th>
                          <th>نسبة اكتمال المشروع</th>
                          <th>حالة المقترح</th>
                          <th style="width: 20%">#التعــديل</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>#1520.2551569</a>
                            <br>
                            <small>تاريخ تدوين المقترح 01.01.2015</small>
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                              <li>
                                <img src="images/user.png" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                          </td>
                          <td class="project_progress">
                            <div class="progress progress_sm">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57" aria-valuenow="56" style="width: 57%;"></div>
                            </div>
                            <small>57% Complete</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">مقبول</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> عرض </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> تعديل </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> مسح </a>
                          </td>
                        </tr>
                       
                        </tr>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
						  <p></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content11" aria-labelledby="profile-tab">
                          <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_390">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
							     <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                             
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="<?php echo $userRow['userpic'];?>" alt="..." class="img-circle profile_img">
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"><?php   $userRow['userName'];?></h3>

                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3>123</h3>
                                  <span>ع.الساعات</span>
                                </li>
                                <li>
                                  <h3>1234</h3>
                                  <span>ت.الساعة</span>
                                </li>
                                <li>
                                  <h3>123</h3>
                                  <span>م.الاعضاء</span>
                                </li>
                              </ul>
                            </div>
                            <p>
                              *************************
							<button type="submit" class="btn btn-success">موافق</button>
							<button type="submit" class="btn btn-primary">الغاء</button>
                          </div>
                        </div>
                      </div>
						  
                          <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_390">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
							     <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                             
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="<?php echo $userRow['userpic'];?>" alt="..." class="img-circle profile_img">
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"><?php   $userRow['userName'];?></h3>

                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3>123</h3>
                                  <span>ع.الساعات</span>
                                </li>
                                <li>
                                  <h3>1234</h3>
                                  <span>ت.الساعة</span>
                                </li>
                                <li>
                                  <h3>123</h3>
                                  <span>م.الاعضاء</span>
                                </li>
                              </ul>
                            </div>
                            <p>
                              *************************
						<button type="submit" class="btn btn-success">موافق</button>
							<button type="submit" class="btn btn-primary">الغاء</button>
                          </div>
                        </div>
                      </div>
						 
                          <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_390">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
							     <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                             
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="<?php echo $userRow['userpic'];?>" alt="..." class="img-circle profile_img">
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"><?php   $userRow['userName'];?></h3>

                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3>123</h3>
                                  <span>ع.الساعات</span>
                                </li>
                                <li>
                                  <h3>1234</h3>
                                  <span>ت.الساعة</span>
                                </li>
                                <li>
                                  <h3>123</h3>
                                  <span>م.الاعضاء</span>
                                </li>
                              </ul>
                            </div>
                            <p>
*************************                            </p>
							<button type="submit" class="btn btn-success">موافق</button>
							<button type="submit" class="btn btn-primary">الغاء</button>
                          </div>
                        </div>
                      </div>
						 
                          <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_390">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
							     <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                             
                                <li>
                                  <a>
                                    <i class="fa fa-facebook"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="<?php echo $userRow['userpic'];?>" alt="..." class="img-circle profile_img">
                                </li>
                              </ul>
                            </div>

                            <h3 class="name"><?php   $userRow['userName'];?></h3>

                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3>123</h3>
                                  <span>ع.الساعات</span>
                                </li>
                                <li>
                                  <h3>1234</h3>
                                  <span>ت.الساعة</span>
                                </li>
                                <li>
                                  <h3>123</h3>
                                  <span>م.الاعضاء</span>
                                </li>
                              </ul>
                            </div>
                            <p>
                              *************************
                            </p>
							<button type="submit" class="btn btn-success">موافق</button>
							<button type="submit" class="btn btn-primary">الغاء</button>
                          </div>
                        </div>
                      </div>
						 
						  <p></p>
                        </div>
						<div role="tabpanel" class="tab-pane fade" id="tab_content34" aria-labelledby="profile-tab">
                          <div class="col-md-3 col-xs-12 widget widget_tally_box" style="
    height: 522px;
">
                        <div class="x_panel fixed_height_390" style="
    height: 522px;
">
                          <div class="x_title">
                            <h2>شروحات  اساسية</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">خصائص</a>
                                  </li>
                                  <li><a href="#">تنزيل</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                            <div style="text-align: center;margin-bottom: 0px;">
                              <ul class="verticle_bars list-inline">
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
                            <p>كيفية عمل قوالب المحركات  </p>
                          </div>
                        </div>
                              </ul>
                            </div>
                            

                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3>8</h3>
                                  <span>الملفات</span>
                                </li>
                                <li>
                                  <h3>30:00</h3>
                                  <span>وقت الفيديو</span>
                                </li>
                                <li>
                                  <h3>15</h3>
                                  <span>تكلفة</span>
                                </li>
                              </ul>
                            </div>
<ul class="legend list-unstyled">
                              <li>
                                <p>
                                  
<span class="icon"><i class="fa fa-square dark"></i></span>
<span class="name">ملف اكسيل</span><span class="icon"><i class="fa fa-square dark"></i></span> 
<span class="name">ملف اكسيل</span>
                                </p>
                              </li>
                              <li>
                                <p>
                                  
                                    <span class="icon"><i class="fa fa-square grey"></i></span><span class="name">ملف pdf</span><span class="icon"><i class="fa fa-square grey"></i></span>  <span class="name">ملف pdf</span>
                                </p>
                              </li>
                              <li>
                                <p>
                                  
                                    <span class="icon"><i class="fa fa-square blue"></i></span><span class="name">ملف ورد</span><span class="icon"><i class="fa fa-square blue"></i></span>  <span class="name">ملف ورد</span>
                                </p>
                              </li>
                              <li>
                                <p>
                                  
<span class="icon"><i class="fa fa-square green"></i></span>
<span class="name">ملفات اخري</span><span class="icon"><i class="fa fa-square green"></i></span> 
                                <span class="name">ملفات اخري</span></p>
                              </li>
                            </ul>

                          </div>
                        </div>
                      </div>
						  <p> </p>
                        </div>
                      </div>
                    </div>

                  </div>
 </div> 
 
 
<div class="row">
<div class="col-md-4">
                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h2>احصائيات مشروعات 3<small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">خصائص</a>
                          </li>
                          <li><a href="#">تنزيل</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
<article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
                    
                    
                    
                    
                  </div>
                </div>
              </div>
<div class="col-md-4">
                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h2>احصائيات مشروعات 2<small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">خصائص</a>
                          </li>
                          <li><a href="#">تنزيل</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
<article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
                    
                    
                    
                    
                  </div>
                </div>
              </div>
<div class="col-md-4">
                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h2>احصائيات مشروعات 1<small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">خصائص</a>
                          </li>
                          <li><a href="#">تنزيل</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
<article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
                    
                    
                    
                    
                  </div>
                </div>
              </div>
<div class="col-md-4">
                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h2>احصائيات مشروعات 6<small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">خصائص</a>
                          </li>
                          <li><a href="#">تنزيل</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
<article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
                    
                    
                    
                    
                  </div>
                </div>
              </div>
<div class="col-md-4">
                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h2>احصائيات مشروعات 5
<small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">خصائص</a>
                          </li>
                          <li><a href="#">تنزيل</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
<article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
                    
                    
                    
                    
                  </div>
                </div>
              </div>
<div class="col-md-4">
                <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                    <h2>احصائيات مشروعات 4<small>*</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">خصائص</a>
                          </li>
                          <li><a href="#">تنزيل</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display: none;">
                    <article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">12</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
<article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">5</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">7</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article><article class="media event">
                      <a class="pull-left date">
                        <p class="month">شهر</p>
                        <p class="day">10</p>
                      </a>
                      <div class="media-body">
                        <a class="title" href="#">تكلفة المشروع 1000000</a>
                        <p>كود المشروع 12#12</p><p>نسبة اشترك بالمشروع (0.3%)س</p>

<p>ارباحك بالمشروع (100)ج</p>
                      </div>
                    </article>
                    
                    
                    
                    
                  </div>
                </div>
              </div>
</div>
					
       
                        
 </div>
		  
                
        </footer>
        <!-- /footer content -->
      </div>
    </div>

 	
	  <?php
			include('menu.php');
		?>
 
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

    <!--<script src="./Gentallela Alela! __files/custom.min.js"></script>-->
<script src="./Gentallela Alela! __files/echarts.min.js"></script>
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
	 <!-- Flot -->
  <script>
  
      $(document).ready(function() {
        //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
        var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

        //generate random number for charts
       randNum = function() {
          return (Math.floor(Math.random() * (1 + 40 - 20))) + 600;
        };
 

        var d1 = [];
        //var d2 = [];

        //here we generate data for chart
       for (var i = 0; i < 13; i++) {
        //  d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
          //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
      //  
        d1.push([new Date(Date.today().add(i).month()).getTime(),  randNum() +i+i+10]);
		
}

		
        var chartMinDate = d1[0][0]; //first day
        var chartMaxDate = d1[12][0]; //last day

        var tickSize = [1, "day"];
        var tformat = "%m/%y";

        //graph options
        var options = {
          grid: {
            show: true,
            aboveData: true,
            color: "#3f3f3f",
            labelMargin: 10,
            axisMargin: 0,
            borderWidth: 0,
            borderColor: null,
            minBorderMargin: 5,
            clickable: true,
            hoverable: true,
            autoHighlight: true,
            mouseActiveRadius: 100
          },
          series: {
            lines: {
              show: true,
              fill: true,
              lineWidth: 2,
              steps: false
            },
            points: {
              show: true,
              radius: 4.5,
              symbol: "circle",
              lineWidth: 3.0
            }
          },
          legend: {
            position: "ne",
            margin: [0, -25],
            noColumns: 0,
            labelBoxBorderColor: null,
            labelFormatter: function(label, series) {
              // just add some space to labes
              return label + '&nbsp;&nbsp;';
            },
            width: 40,
            height: 1
          },
          colors: chartColours,
          shadowSize: 0,
          tooltip: true, //activate tooltip
          tooltipOpts: {
            content: "%s: %m.0",
            xDateFormat: "%d/%m",
            shifts: {
              x: 100,
              y: 100
            },
            defaultTheme: true
          },
          yaxis: {
            min: 0
			
          },
          xaxis: {
            mode: "time",
            minTickSize: tickSize,
            timeformat: tformat,
            min: chartMinDate,
            max: chartMaxDate
          }
        };
        var plot = $.plot($("#placeholder33x"), [{
          label: "الاربـــاح كــل شــهر",
          data: d1,
          lines: {
            fillColor: "rgba(150, 202, 89, 0.12)"
          }, //#96CA59 rgba(150, 202, 89, 0.42)
          points: {
            fillColor: "#fff"
          }
        }], options);
      });
    </script>
   

	 <?php
	 
	// select loggedin users detail
	//$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	//$userRow=mysql_fetch_array($res);
	
		$in=mysql_query("SELECT * FROM Pro_per WHERE month='1'");
        $g=mysql_fetch_array($in);

		$in1=mysql_query("SELECT * FROM Pro_per WHERE month='2'");
        $g1=mysql_fetch_array($in1);
		$in2=mysql_query("SELECT * FROM Pro_per WHERE month='3'");
        $g2=mysql_fetch_array($in2);
		$in3=mysql_query("SELECT * FROM Pro_per WHERE month='4'");
        $g3=mysql_fetch_array($in3);
		$in4=mysql_query("SELECT * FROM Pro_per WHERE month='5'");
        $g4=mysql_fetch_array($in4);
		$in5=mysql_query("SELECT * FROM Pro_per WHERE month='6'");
        $g5=mysql_fetch_array($in5);
		$in6=mysql_query("SELECT * FROM Pro_per WHERE month='7'");
        $g6=mysql_fetch_array($in6);
		$in7=mysql_query("SELECT * FROM Pro_per WHERE month='8'");
        $g7=mysql_fetch_array($in7);
		$in8=mysql_query("SELECT * FROM Pro_per WHERE month='9'");
        $g8=mysql_fetch_array($in8);
		$in9=mysql_query("SELECT * FROM Pro_per WHERE month='10'");
        $g9=mysql_fetch_array($in9);
		$in10=mysql_query("SELECT * FROM Pro_per WHERE month='11'");
        $g10=mysql_fetch_array($in10);
		$in11=mysql_query("SELECT * FROM Pro_per WHERE month='12'");
        $g11=mysql_fetch_array($in11);
	//  $p1=$g['p1'];$p2=$g['p2'];$p3=$g['p3'];$p4=$g['p4'];$p5=$g['p5'];$p6=$g['p6'];$p7=$g['p7'];$p8=$g['p8'];$p9=$g['p9'];
	// $p10=$g['p10'];$p11=$g['p11'];$p12=$g['p12'];$p13=$g['p13'];$p14=$g['p14'];$p15=$g['p15'];$p16=$g['p16'];$p17=$g['p17'];
	// $p18=$g['p18'];$p19=$g['p19'];$p20=$g['p20'];$p21=$g['p21'];$p22=$g['p22'];$p23=$g['p23'];$p24=$g['p24'];
	// $p25=$g['p25'];$p26=$g['p26'];$p27=$g['p27'];$p28=$g['p28'];$p29=$g['p29'];$p30=$g['p30'];$p31=$g['p31'];$p32=$g['p32'];
	  
	 ?>
   <script>
      var theme = {
          color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7',
			  '#dc5050', '#084def', '#89b508', '#b59908',
			  '#e26f0a', '#08b576', '#da7b55', '#31b508',
              '#cec9c9', '#313235', '#fd4949', '#03f1f3',
			  '#aece0d', '#f56b07', '#034850', '#0bc535',
			  '#c50bbe', '#9d8df1', '#217df3', '#07e6b5',
			  '#00ff16', '#b90303', '#ea64a7', '#52880e'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
          },
          gauge: {
              startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };

      var echartBarLine = echarts.init(document.getElementById('mainb'), theme);

      echartBarLine.setOption({
        title: {
          x: 'center',
          y: 'top',
          padding: [0, 0, 20, 0],
          text: 'احصائيات الاربـاح لجميع المشاريع',
          textStyle: {
            fontSize: 15,
            fontWeight: 'normal'
          }
        },
        tooltip: {
          trigger: 'axis'
        },
        toolbox: {
          show: true,
          feature: {
            dataView: {
              show: true,
              readOnly: false,
              title: "ملف نصي",
              lang: [
                "Text View",
                "غلق",
                "تحديث",
              ],
            },
            restore: {
              show: true,
              title: 'كما كانت'
            },
            saveAsImage: {
              show: true,
              title: 'حفظ'
            }
          }
        },
        calculable: true,
        legend: {
          data: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24'
		  , '25', '26', '27', '28', '29', '30', '31', '32', 'الفترة الزمنية'],
          y: '360px'
        },
        xAxis: [{
          type: 'category',
          data: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونية', 'يولية', 'اغسطس', 'سبتمبر', 'اكتوبر', 'نوفمبر', 'ديسمبر']
        }],
        yAxis: [{
          type: 'value',
          name: 'الارباح',
          axisLabel: {
            formatter: '{value} جنية'
          }
        }, {
          type: 'value',
          name: 'النسب',
          axisLabel: {
            formatter: '{value} نسبة الارتفاع'
          }
        }],
        series: [{
          name: '1',
          type: 'bar',
		  
          data: [<?php  echo $g['p1']; ?>, <?php  echo $g1['p1']; ?>, <?php  echo $g2['p1']; ?>, <?php  echo $g3['p1']; ?>, <?php  echo $g4['p1']; ?>, <?php  echo $g5['p1']; ?>, <?php  echo $g6['p1']; ?>, <?php  echo $g7['p1']; ?>, <?php  echo $g8['p1']; ?>, <?php  echo $g9['p1']; ?>, <?php  echo $g10['p1']; ?>, <?php  echo $g11['p1']; ?>]
        }, {
          name: '2',
          type: 'bar',
          data: [<?php  echo $g['p2']; ?>, <?php  echo $g1['p2']; ?>, <?php  echo $g2['p2']; ?>, <?php  echo $g3['p2']; ?>, <?php  echo $g4['p2']; ?>, <?php  echo $g5['p2']; ?>, <?php  echo $g6['p2']; ?>, <?php  echo $g7['p2']; ?>, <?php  echo $g8['p2']; ?>, <?php  echo $g9['p2']; ?>, <?php  echo $g10['p2']; ?>, <?php  echo $g11['p2']; ?>]
        },{
          name: '3',
          type: 'bar',
          data: [<?php  echo $g['p3']; ?>, <?php  echo $g1['p3']; ?>, <?php  echo $g2['p3']; ?>, <?php  echo $g3['p3']; ?>, <?php  echo $g4['p3']; ?>, <?php  echo $g5['p3']; ?>, <?php  echo $g6['p3']; ?>, <?php  echo $g7['p3']; ?>, <?php  echo $g8['p3']; ?>, <?php  echo $g9['p3']; ?>, <?php  echo $g10['p3']; ?>, <?php  echo $g11['p3']; ?>]
        },{
          name: '4',
          type: 'bar',
          data: [<?php  echo $g['p4']; ?>, <?php  echo $g1['p4']; ?>, <?php  echo $g2['p4']; ?>, <?php  echo $g3['p4']; ?>, <?php  echo $g4['p4']; ?>, <?php  echo $g5['p4']; ?>, <?php  echo $g6['p4']; ?>, <?php  echo $g7['p4']; ?>, <?php  echo $g8['p4']; ?>, <?php  echo $g9['p4']; ?>, <?php  echo $g10['p4']; ?>, <?php  echo $g11['p4']; ?>]
        },{
          name: '5',
          type: 'bar',
          data: [<?php  echo $g['p5']; ?>, <?php  echo $g1['p5']; ?>, <?php  echo $g2['p5']; ?>, <?php  echo $g3['p5']; ?>, <?php  echo $g4['p5']; ?>, <?php  echo $g5['p5']; ?>, <?php  echo $g6['p5']; ?>, <?php  echo $g7['p5']; ?>, <?php  echo $g8['p5']; ?>, <?php  echo $g9['p5']; ?>, <?php  echo $g10['p5']; ?>, <?php  echo $g11['p5']; ?>]
        },{
          name: '6',
          type: 'bar',
          data: [<?php  echo $g['p6']; ?>, <?php  echo $g1['p6']; ?>, <?php  echo $g2['p6']; ?>, <?php  echo $g3['p6']; ?>, <?php  echo $g4['p6']; ?>, <?php  echo $g5['p6']; ?>, <?php  echo $g6['p6']; ?>, <?php  echo $g7['p6']; ?>, <?php  echo $g8['p6']; ?>, <?php  echo $g9['p6']; ?>, <?php  echo $g10['p6']; ?>, <?php  echo $g11['p6']; ?>]
        },{
          name: '7',
          type: 'bar',
          data: [<?php  echo $g['p7']; ?>, <?php  echo $g1['p7']; ?>, <?php  echo $g2['p7']; ?>, <?php  echo $g3['p7']; ?>, <?php  echo $g4['p7']; ?>, <?php  echo $g5['p7']; ?>, <?php  echo $g6['p7']; ?>, <?php  echo $g7['p7']; ?>, <?php  echo $g8['p7']; ?>, <?php  echo $g9['p7']; ?>, <?php  echo $g10['p7']; ?>, <?php  echo $g11['p7']; ?>]
        },{
          name: '8',
          type: 'bar',
          data: [<?php  echo $g['p8']; ?>, <?php  echo $g1['p8']; ?>, <?php  echo $g2['p8']; ?>, <?php  echo $g3['p8']; ?>, <?php  echo $g4['p8']; ?>, <?php  echo $g5['p8']; ?>, <?php  echo $g6['p8']; ?>, <?php  echo $g7['p8']; ?>, <?php  echo $g8['p8']; ?>, <?php  echo $g9['p8']; ?>, <?php  echo $g10['p8']; ?>, <?php  echo $g11['p8']; ?>]
        },{
          name: '9',
          type: 'bar',
          data: [<?php  echo $g['p9']; ?>, <?php  echo $g1['p9']; ?>, <?php  echo $g2['p9']; ?>, <?php  echo $g3['p9']; ?>, <?php  echo $g4['p9']; ?>, <?php  echo $g5['p9']; ?>, <?php  echo $g6['p9']; ?>, <?php  echo $g7['p9']; ?>, <?php  echo $g8['p9']; ?>, <?php  echo $g9['p9']; ?>, <?php  echo $g10['p9']; ?>, <?php  echo $g11['p9']; ?>]
        },{
          name: '10',
          type: 'bar',
          data: [<?php  echo $g['p10']; ?>, <?php  echo $g1['p10']; ?>, <?php  echo $g2['p10']; ?>, <?php  echo $g3['p10']; ?>, <?php  echo $g4['p10']; ?>, <?php  echo $g5['p10']; ?>, <?php  echo $g6['p10']; ?>, <?php  echo $g7['p10']; ?>, <?php  echo $g8['p10']; ?>, <?php  echo $g9['p10']; ?>, <?php  echo $g10['p10']; ?>, <?php  echo $g11['p10']; ?>]
        },{
          name: '11',
          type: 'bar',
          data: [<?php  echo $g['p11']; ?>, <?php  echo $g1['p11']; ?>, <?php  echo $g2['p11']; ?>, <?php  echo $g3['p11']; ?>, <?php  echo $g4['p11']; ?>, <?php  echo $g5['p11']; ?>, <?php  echo $g6['p11']; ?>, <?php  echo $g7['p11']; ?>, <?php  echo $g8['p11']; ?>, <?php  echo $g9['p11']; ?>, <?php  echo $g10['p11']; ?>, <?php  echo $g11['p11']; ?>]
        },{
          name: '12',
          type: 'bar',
          data: [<?php  echo $g['p12']; ?>, <?php  echo $g1['p12']; ?>, <?php  echo $g2['p12']; ?>, <?php  echo $g3['p12']; ?>, <?php  echo $g4['p12']; ?>, <?php  echo $g5['p12']; ?>, <?php  echo $g6['p12']; ?>, <?php  echo $g7['p12']; ?>, <?php  echo $g8['p12']; ?>, <?php  echo $g9['p12']; ?>, <?php  echo $g10['p12']; ?>, <?php  echo $g11['p12']; ?>]
        },{
          name: '13',
          type: 'bar',
          data: [<?php  echo $g['p13']; ?>, <?php  echo $g1['p13']; ?>, <?php  echo $g2['p13']; ?>, <?php  echo $g3['p13']; ?>, <?php  echo $g4['p13']; ?>, <?php  echo $g5['p13']; ?>, <?php  echo $g6['p13']; ?>, <?php  echo $g7['p13']; ?>, <?php  echo $g8['p13']; ?>, <?php  echo $g9['p13']; ?>, <?php  echo $g10['p13']; ?>, <?php  echo $g11['p13']; ?>]
        },{
          name: '14',
          type: 'bar',
          data: [<?php  echo $g['p14']; ?>, <?php  echo $g1['p14']; ?>, <?php  echo $g2['p14']; ?>, <?php  echo $g3['p14']; ?>, <?php  echo $g4['p14']; ?>, <?php  echo $g5['p14']; ?>, <?php  echo $g6['p14']; ?>, <?php  echo $g7['p14']; ?>, <?php  echo $g8['p14']; ?>, <?php  echo $g9['p14']; ?>, <?php  echo $g10['p14']; ?>, <?php  echo $g11['p14']; ?>]
        },{
          name: '15',
          type: 'bar',
          data: [<?php  echo $g['p15']; ?>, <?php  echo $g1['p15']; ?>, <?php  echo $g2['p15']; ?>, <?php  echo $g3['p15']; ?>, <?php  echo $g4['p15']; ?>, <?php  echo $g5['p15']; ?>, <?php  echo $g6['p15']; ?>, <?php  echo $g7['p15']; ?>, <?php  echo $g8['p15']; ?>, <?php  echo $g9['p15']; ?>, <?php  echo $g10['p15']; ?>, <?php  echo $g11['p15']; ?>]
        },{
          name: '16',
          type: 'bar',
          data: [<?php  echo $g['p16']; ?>, <?php  echo $g1['p16']; ?>, <?php  echo $g2['p16']; ?>, <?php  echo $g3['p16']; ?>, <?php  echo $g4['p16']; ?>, <?php  echo $g5['p16']; ?>, <?php  echo $g6['p16']; ?>, <?php  echo $g7['p16']; ?>, <?php  echo $g8['p16']; ?>, <?php  echo $g9['p16']; ?>, <?php  echo $g10['p16']; ?>, <?php  echo $g11['p16']; ?>]
        },{
          name: '17',
          type: 'bar',
          data: [<?php  echo $g['p17']; ?>, <?php  echo $g1['p17']; ?>, <?php  echo $g2['p17']; ?>, <?php  echo $g3['p17']; ?>, <?php  echo $g4['p17']; ?>, <?php  echo $g5['p17']; ?>, <?php  echo $g6['p17']; ?>, <?php  echo $g7['p17']; ?>, <?php  echo $g8['p17']; ?>, <?php  echo $g9['p17']; ?>, <?php  echo $g10['p17']; ?>, <?php  echo $g11['p17']; ?>]
        },{
          name: '18',
          type: 'bar',
          data: [<?php  echo $g['p18']; ?>, <?php  echo $g1['p18']; ?>, <?php  echo $g2['p18']; ?>, <?php  echo $g3['p18']; ?>, <?php  echo $g4['p18']; ?>, <?php  echo $g5['p18']; ?>, <?php  echo $g6['p18']; ?>, <?php  echo $g7['p18']; ?>, <?php  echo $g8['p18']; ?>, <?php  echo $g9['p18']; ?>, <?php  echo $g10['p18']; ?>, <?php  echo $g11['p18']; ?>]
        },{
          name: '19',
          type: 'bar',
          data: [<?php  echo $g['p19']; ?>, <?php  echo $g1['p19']; ?>, <?php  echo $g2['p19']; ?>, <?php  echo $g3['p19']; ?>, <?php  echo $g4['p19']; ?>, <?php  echo $g5['p19']; ?>, <?php  echo $g6['p19']; ?>, <?php  echo $g7['p19']; ?>, <?php  echo $g8['p19']; ?>, <?php  echo $g9['p19']; ?>, <?php  echo $g10['p19']; ?>, <?php  echo $g11['p19']; ?>]
        },{
          name: '20',
          type: 'bar',
          data: [<?php  echo $g['p20']; ?>, <?php  echo $g1['p20']; ?>, <?php  echo $g2['p20']; ?>, <?php  echo $g3['p20']; ?>, <?php  echo $g4['p20']; ?>, <?php  echo $g5['p20']; ?>, <?php  echo $g6['p20']; ?>, <?php  echo $g7['p20']; ?>, <?php  echo $g8['p20']; ?>, <?php  echo $g9['p20']; ?>, <?php  echo $g10['p20']; ?>, <?php  echo $g11['p20']; ?>]
        },{
          name: '21',
          type: 'bar',
          data: [<?php  echo $g['p21']; ?>, <?php  echo $g1['p21']; ?>, <?php  echo $g2['p21']; ?>, <?php  echo $g3['p21']; ?>, <?php  echo $g4['p21']; ?>, <?php  echo $g5['p21']; ?>, <?php  echo $g6['p21']; ?>, <?php  echo $g7['p21']; ?>, <?php  echo $g8['p21']; ?>, <?php  echo $g9['p21']; ?>, <?php  echo $g10['p21']; ?>, <?php  echo $g11['p21']; ?>]
        },{
          name: '22',
          type: 'bar',
          data: [<?php  echo $g['p22']; ?>, <?php  echo $g1['p22']; ?>, <?php  echo $g2['p22']; ?>, <?php  echo $g3['p22']; ?>, <?php  echo $g4['p22']; ?>, <?php  echo $g5['p22']; ?>, <?php  echo $g6['p22']; ?>, <?php  echo $g7['p22']; ?>, <?php  echo $g8['p22']; ?>, <?php  echo $g9['p22']; ?>, <?php  echo $g10['p22']; ?>, <?php  echo $g11['p22']; ?>]
        },{
          name: '23',
          type: 'bar',
          data: [<?php  echo $g['p23']; ?>, <?php  echo $g1['p23']; ?>, <?php  echo $g2['p23']; ?>, <?php  echo $g3['p23']; ?>, <?php  echo $g4['p23']; ?>, <?php  echo $g5['p23']; ?>, <?php  echo $g6['p23']; ?>, <?php  echo $g7['p23']; ?>, <?php  echo $g8['p23']; ?>, <?php  echo $g9['p23']; ?>, <?php  echo $g10['p23']; ?>, <?php  echo $g11['p23']; ?>]
        },{
          name: '24',
          type: 'bar',
          data: [<?php  echo $g['p24']; ?>, <?php  echo $g1['p24']; ?>, <?php  echo $g2['p24']; ?>, <?php  echo $g3['p24']; ?>, <?php  echo $g4['p24']; ?>, <?php  echo $g5['p24']; ?>, <?php  echo $g6['p24']; ?>, <?php  echo $g7['p24']; ?>, <?php  echo $g8['p24']; ?>, <?php  echo $g9['p24']; ?>, <?php  echo $g10['p24']; ?>, <?php  echo $g11['p24']; ?>]
        },{
          name: '25',
          type: 'bar',
          data: [<?php  echo $g['p25']; ?>, <?php  echo $g1['p25']; ?>, <?php  echo $g2['p25']; ?>, <?php  echo $g3['p25']; ?>, <?php  echo $g4['p25']; ?>, <?php  echo $g5['p25']; ?>, <?php  echo $g6['p25']; ?>, <?php  echo $g7['p25']; ?>, <?php  echo $g8['p25']; ?>, <?php  echo $g9['p25']; ?>, <?php  echo $g10['p25']; ?>, <?php  echo $g11['p25']; ?>]
        },{
          name: '26',
          type: 'bar',
          data: [<?php  echo $g['p26']; ?>, <?php  echo $g1['p26']; ?>, <?php  echo $g2['p26']; ?>, <?php  echo $g3['p26']; ?>, <?php  echo $g4['p26']; ?>, <?php  echo $g5['p26']; ?>, <?php  echo $g6['p26']; ?>, <?php  echo $g7['p26']; ?>, <?php  echo $g8['p26']; ?>, <?php  echo $g9['p26']; ?>, <?php  echo $g10['p26']; ?>, <?php  echo $g11['p26']; ?>]
        },{
          name: '27',
          type: 'bar',
          data: [<?php  echo $g['p27']; ?>, <?php  echo $g1['p27']; ?>, <?php  echo $g2['p27']; ?>, <?php  echo $g3['p27']; ?>, <?php  echo $g4['p27']; ?>, <?php  echo $g5['p27']; ?>, <?php  echo $g6['p27']; ?>, <?php  echo $g7['p27']; ?>, <?php  echo $g8['p27']; ?>, <?php  echo $g9['p27']; ?>, <?php  echo $g10['p27']; ?>, <?php  echo $g11['p27']; ?>]
        },{
          name: '28',
          type: 'bar',
          data: [<?php  echo $g['p28']; ?>, <?php  echo $g1['p28']; ?>, <?php  echo $g2['p28']; ?>, <?php  echo $g3['p28']; ?>, <?php  echo $g4['p28']; ?>, <?php  echo $g5['p28']; ?>, <?php  echo $g6['p28']; ?>, <?php  echo $g7['p28']; ?>, <?php  echo $g8['p28']; ?>, <?php  echo $g9['p28']; ?>, <?php  echo $g10['p28']; ?>, <?php  echo $g11['p28']; ?>]
        },{
          name: '29',
          type: 'bar',
          data: [<?php  echo $g['p29']; ?>, <?php  echo $g1['p29']; ?>, <?php  echo $g2['p29']; ?>, <?php  echo $g3['p29']; ?>, <?php  echo $g4['p29']; ?>, <?php  echo $g5['p29']; ?>, <?php  echo $g6['p29']; ?>, <?php  echo $g7['p29']; ?>, <?php  echo $g8['p29']; ?>, <?php  echo $g9['p29']; ?>, <?php  echo $g10['p29']; ?>, <?php  echo $g11['p29']; ?>]
        },{
          name: '30',
          type: 'bar',
          data: [<?php  echo $g['p30']; ?>, <?php  echo $g1['p30']; ?>, <?php  echo $g2['p30']; ?>, <?php  echo $g3['p30']; ?>, <?php  echo $g4['p30']; ?>, <?php  echo $g5['p30']; ?>, <?php  echo $g6['p30']; ?>, <?php  echo $g7['p30']; ?>, <?php  echo $g8['p30']; ?>, <?php  echo $g9['p30']; ?>, <?php  echo $g10['p30']; ?>, <?php  echo $g11['p30']; ?>]
        },{
          name: '31',
          type: 'bar',
          data: [<?php  echo $g['p31']; ?>, <?php  echo $g1['p31']; ?>, <?php  echo $g2['p31']; ?>, <?php  echo $g3['p31']; ?>, <?php  echo $g4['p31']; ?>, <?php  echo $g5['p31']; ?>, <?php  echo $g6['p31']; ?>, <?php  echo $g7['p31']; ?>, <?php  echo $g8['p31']; ?>, <?php  echo $g9['p31']; ?>, <?php  echo $g10['p31']; ?>, <?php  echo $g11['p31']; ?>]
        },{
          name: '32',
          type: 'bar',
          data: [<?php  echo $g['p32']; ?>, <?php  echo $g1['p32']; ?>, <?php  echo $g2['p32']; ?>, <?php  echo $g3['p32']; ?>, <?php  echo $g4['p32']; ?>, <?php  echo $g5['p32']; ?>, <?php  echo $g6['p32']; ?>, <?php  echo $g7['p32']; ?>, <?php  echo $g8['p32']; ?>, <?php  echo $g9['p32']; ?>, <?php  echo $g10['p32']; ?>, <?php  echo $g11['p32']; ?>]
        }, {
          name: 'الفترة الزمنية',
          type: 'line',
          yAxisIndex: 1,
          data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2]
        }]
      });
    </script>
    <!-- /Flot -->

    <!-- jQuery Sparklines -->
    <script>
      $(document).ready(function() {
        $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
          type: 'bar',
          height: '125',
          barWidth: 13,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
          type: 'bar',
          height: '40',
          barWidth: 8,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
          type: 'line',
          height: '40',
          width: '200',
          lineColor: '#26B99A',
          fillColor: '#ffffff',
          lineWidth: 3,
          spotColor: '#34495E',
          minSpotColor: '#34495E'
        });
      });
    </script>
    <!-- /jQuery Sparklines -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function() {
        var canvasDoughnut,
            options = {
              legend: false,
              responsive: false
            };

        new Chart(document.getElementById("canvas1i"), {
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

        new Chart(document.getElementById("canvas1i2"), {
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

        new Chart(document.getElementById("canvas1i3"), {
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
    <script type="text/javascript">
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

</body>

</html>
