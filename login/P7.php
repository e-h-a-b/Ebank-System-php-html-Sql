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
	<script>
	(function() {
    var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'shortcut icon';
    link.href = 'http://www.ebank.esy.es/login/m.ico';
    document.getElementsByTagName('head')[0].appendChild(link);
}());
	</script>
<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  </head>
   
 		<?php   
		$_GET['id'] = 19;
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
        <div class="right_col" role="main" style="min-height: 1732px;">          <!-- top tiles -->
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
			
            
            
            
            
            
            <div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                <div class="x_title">
                  <h><a href="http://ebank.esy.es/login/project1.php">P1   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: block;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع ري الاراضي</h1>
                      <p>لزرع ارضي زراعية جديدة يجب ان يتم الاهتمام بمنظومة الري لتغطية مساحات كبيرة من الارضي دون تكلفة</p>
					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>

                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			
			
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                <div class="x_title">
                  <h><a href="http://ebank.esy.es/login/project2.php">P2   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع استصلاح اراضي</h1>
                      <p>ان عملية استصلاح الاراضي الزراعية  احد العمليات الصعبة  حيث تمر بمراحل كثيرة   منها  غلق الارضي وحمياتها من التصحر سمك التربة وجودة التربة</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                <div class="x_title">
                  <h><a href="http://ebank.esy.es/login/project3.php">P3   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة </a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع تحلية المياة</h1>
                      <p>الهدف من هذا المشروع مد الارضي الزراعية بقلب الصحراء بدون تكلفة تنقل على عربات  وتفرغ فى خزانات</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                <div class="x_title">
                  <h><a href="http://ebank.esy.es/login/project4.php">P4   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع الالات الزراعية</h1>
                      <p>وبعد الزراعة تاتى عملية جني المحاصيل ولكثرة المحاصيل تحتاج الى معدات لحاصدها لذا هذا المشروع من اجل ذلك</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                <div class="x_title">
                  <h><a href="http://ebank.esy.es/login/project5.php">P5   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع الدواجن</h1>
                      <p>هذا المشروع يهتم بتربية الدواجن وله عامل متغير كانتاج البيض</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
			   <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project6.php">P6   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع الماشية</h1>
                      <p>هذا المشروع يهتم بتربية الاغنام والماعز حيث ان الاهتمام بتلك الكائينات سيئ للغاية</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto
			   <div class="x_title">
               <h><a href="http://ebank.esy.es/login/project7.php">P7   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع الابقار والجواميس</h1>
                      <p>ان الاهتمام بهذا المشروع وتربية مثل هذه الكائينات مربح وله العديد من الفوائد وعامل متغيرة كلبن وولدة كائينات مماثلة</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project8.php">P8   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع الاسماك</h1>
                      <p>ان مشروع انتاج الاسماك فى مزرعة طبيعية مفيد وله وعوائد مادية عالية حيث ان الاسماك تبيض بكميات هائلة </p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                 <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project9.php">P9   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع صنع خلايا شمسية</h1>
                      <p>ان مشروع انتاج الطاقة الجديدة والنظيفة يأتى من انتاج خلايا شمسية  حيث ستمد المصانع والمشروعات والمنازل بالطاقة النظيفة</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                 <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project10.php">Pr10   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع تحويل السيارت من بنزين الى غاز</h1>
                      <p>ان مشروع تحويل السيارات لتعمل بالغاز والكهرباء مربح جدا حيث انها رخيصة وتنظف البيئة من العوادم</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
               <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project11.php">Pr11   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع تصنيع المحركات الكهربية</h1>
                      <p>ان مشروع تصنيع المحركات يمد المصانع والمركبات بجيل من المحركات الكهربية وتستمد طاقتها من الخلايا الشمسية</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project12.php">Pr12   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع صنع هياكل المعدات</h1>
                      <p>ان تصنيع الهيكل للمعدات والمركبات 85%من المعدة والباقى على المحرك او الموتور واجهزة التحكم</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                 <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project13.php">Pr13   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع انتاج الماكينات</h1>
                      <p>لكى يتم انتاج تيرس او ايطار اوقوالب محركات  فانه يحتاج الى مكينة لانتاجة </p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                 <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project14.php">Pr14   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع دعم المصانع المغلقة</h1>
                      <p>ان المصانع تغلق الاساسية بسبب التمويل او عدم وجود سوق او خسائر فان دعم تلك المصانع يربح البنك ويدعم السوق</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                 <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project15.php">Pr15   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع اسواق تابعة للبنك</h1>
                      <p>ان السلع المنتجة يجب تقديمها للمستهلك بافضل صورة واقرب مكان له فان الاسواق المتحركة الالكترونية مشروع مربح للغاية</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project16.php">Pr16   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع تدوير المخلفات والالات القديمة</h1>
                      <p>ان تدوير المهملات يرفع من انتاجية المواد  كالبلاستك والنحاس والحديد وباقي المواد</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project17.php">Pr17   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع انشاء واحدت سكانية</h1>
                      <p>ان معادلات التنمية وترتفع هذا مع احتياج الفرد لحياة اسرية خلابة لذا ان مشاريع الواحدات السكنية مربحة واساسية</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project18.php">Pr18   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مصانع انتاج الاحذية</h1>
                      <p>ان انتاج الاحذية من ضمن اهم احتياجات الفرد لذا فان المشروع مربح للغاية ومفيد</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project19.php">Pr19   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مصانع انتاج الملابس</h1>
                      <p>من ضمن اهم المنتاجات التى يحتاجه الفرد فان الملابس مربحة جدا ورخيصة جدا</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project20.php">Pr20   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مصانع انتاج اليات الكترونية</h1>
                      <p>ان جميع المصانع تحتاج الى الجانب الالى والكثير من الاعمال فى جميع المشروعات تحتاج الى اليات</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project21.php">Pr21   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مصانع انتاج مولدات كهربائية</h1>
                      <p>ان المولدات الكهربية تعمل على دعم الاسواق الخاصة بالبنك وطاقم العمل وتدعم فى اغلب الاحيان المصانع</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project22.php">Pr22   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع استبدال ملوثات البيئة</h1>
                      <p>ان المشروع يهدف الى الية مقترحة من قبل الاعضاء لتغير السيارت مداخن المصانع الخ</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project23.php">Pr23   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع استخراج المواد الخام</h1>
                      <p>ان مصر تمتلك من المواد الخام ما يفوق الخيال ولكن عدم الاهتمام يجعل الاخرين يطمعون فى سلبها مثل السيلكون النحاس والرصاص والبترول ...الخ</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project24.php">Pr24   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع انتاج الاداوت المنزلية</h1>
                      <p>لايخلو المنزل من الاداوت كالمكنسة والغسلة والبتوجاز والشفاط والخلاط الخ مربح للغاية</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project25.php">Pr25   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع مقترح من قبل الاعضاء</h1>
                      <p>يظل هذا المشروع تحت طلب الاعضاء فى اضافة والموافقة علية</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project26.php">Pr26   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع جمع القطع المعدانية من المنازل</h1>
                      <p>ان المعادن الموجودة بالمنازل كثيرة للغاية وان اخذها واعادة تدويرها سهل جدا لان المعادن خام</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project27.php">Pr27   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع استنساخ وتطوير المعدات</h1>
                      <p>ان المعدات الثقيلة قوية لوزنها وقوة محركها فان نسخ الاله بتفكيكها ووطباعة مكوناتها وتطويرها امر بسيط ويفيد المشاريع</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project28.php">Pr28   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع انتاج الاجهزة الالكترونية</h1>
                      <p>ان انتاج الاجهزة الدقيقة يحتاج الى مصانع الكترونيةوالات الكترونية لانتاج اجهزة طبية واجهزة المنازل الخ مشروعات مربحة</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project29.php">Pr29   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>انتاج المركبات مثل السيارة</h1>
                      <p>ان انتاج المركبات مفيد جدا فى المشاريع عربات نقل وعربات خاصة الخ..</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project30.php">Pr30   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروع انتاج المكاينات الالكترونية للبيع والشراء</h1>
                      <p>مشروع مربح للغاية حيث تعمل الماكينات الى بيع المنتجات للمستهلك بسرعة ورقي  حيث تسجل طلبك بالموقع وتحجز معاد لجلب المنتج</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project31.php">Pr31   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>مشروعات الرفهاية مثل ماكينات الطبخ</h1>
                      <p>مكاينات لعمل الطبخ او ماشبه ماكينات لانتاج الحلويات ماكينات عمل  الشعر الخ...</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
			<div class="col-md-6 col-sm-6 col-xs-12" style="width: 100%;" dir="rtl">
              <div class="x_panel" style="height: auto;">
                  <div class="x_title">
                 <h><a href="http://ebank.esy.es/login/project32.php">Pr32   المشروع كود رقم </a> <small>Sessions</small></h>
                  <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">اضف خطة</a>
                        </li>
                        <li><a href="#">اضف تعديل</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: none;">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
					<h1>اقترح مشروعا اساسيا مربحا ومنخفض التكلفة</h1>
                      <p>.</p>
					  					  <!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid #20374B;
    border-collapse: collapse;
	text-align: -webkit-center;
}
th, td {
    padding: 5px;
        text-align: -webkit-center;
}
caption{
	 text-align: -webkit-center;
}
</style>
</head>
<body>

<table style="width:100%">
  <caption>بيانات المشروع</caption>
  <tr>
    <th>كود المشروع</th>
    <th>مساحة الاراضي</th>
    <th>مكان الارض</th>
    <th>عدد الاراضي</th>
    <th>عدد الاعضاء المشتركين</th>
    <th>تكلفة المشروع</th>
  </tr>
  <tr>
    <td><a href="#">12#156</a></td>
    <td>300 م3</td>
    <td>حلون</td>
    <td>5</td>
    <td>1500 عضو</td>
    <td>100000 جنية</td>
  </tr>
 
</table>

</body>
</html>
                    </div>
                  </div>

                </div>
                
              </div>
            </div>
		
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
   <script src="./Gentallela Alela! __files/drawerjquery.min.js"></script>
                <script type="text/javascript" src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>

	<!-- jQuery -->

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