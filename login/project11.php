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
	
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style.css" />
<script scr="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
   
 		<?php   
		$_GET['id'] = 54;
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
        <div class="right_col" role="main" style="min-height: 1732px;height:1600px;">          <!-- top tiles -->
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
		  <iframe height="400px" width="100%" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html">
   
</iframe>
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" dir="rtl">
                    <h>انشاء مشروع<small> مصنيع المحركات الكهربية</small></h>
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
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps anchor">
                     
						<li>
                          <a href="http://ebank.esy.es/login/project11.php#step-6" class="disabled" isdone="0" rel="6">
                            <span class="step_no">6</span>
                            <span class="step_descr"> الخطوة 6<br>
                                              <small>تكاليف فعلية</small>
                                          </span>
                          </a>
                        </li>
                         
                         <li>
                          <a href="http://ebank.esy.es/login/project11.php#step-5" class="disabled" isdone="0" rel="5">
                            <span class="step_no">5</span>
                            <span class="step_descr">الخطوة 5<br>
                                              <small>الاجراءات القانونية</small>
                                          </span>
                          </a>
                        </li>
						<li>
                          <a href="http://ebank.esy.es/login/project11.php#step-4" class="disabled" isdone="0" rel="4">
                            <span class="step_no">4</span>
                            <span class="step_descr">الخطوة 4<br>
                                              <small>عدد الشركاء</small>
                                          </span>
                          </a>
                        </li>
						 <li>
                          <a href="http://ebank.esy.es/login/project11.php#step-3" class="disabled" isdone="0" rel="3">
                            <span class="step_no">3</span>
                            <span class="step_descr">الخطوة 3<br>
                                              <small>تكلفة المرحلة</small>
                                          </span>
                          </a>
                        </li>
						<li>
                          <a href="http://ebank.esy.es/login/project11.php#step-2" class="disabled" isdone="0" rel="2">
                            <span class="step_no">2</span>
                            <span class="step_descr">الخطوة 2<br>
                                              <small>امكان المرحلة</small>
                                          </span>
                          </a>
                        </li>
						<li>
                          <a href="http://ebank.esy.es/login/project11.php#step-1" class="selected" isdone="1" rel="1">
                            <span class="step_no">1</span>
                            <span class="step_descr">الخطوة 1<br>
                                              <small>وصف المرحلة</small>
                                          </span>
                          </a>
                        </li>
                        
                       
                        
                         
                         
                         
                      </ul>
                      
                      
                      

                    <div class="stepContainer" style="height: 430px;">
					<div id="step-6" class="content" style="display: block;">
                       	  <h2 class="StepTitle">محتوى الخطوة السادسة</h2>
						  
					</div>
					<div id="step-5" class="content" style="display: block;">
                       	  <h2 class="StepTitle">محتوى الخطوة الخامسة</h2>
						   <div class="bs-glyphicons">
 
                        <ul class="bs-glyphicons-list">
						
						<?php    
 
	   $qp = mysql_query("SELECT * FROM addproject WHERE  pernu='11'");
 $qlll =mysql_query("SELECT proj FROM astbyan WHERE nu='11'");
       	
 		
	while($rpp = mysql_fetch_array($qlll)){
		$pername=$rpp['proj']; //اسم المشروع
	  $stauts=$rpp['status'];//حالة المشروع
	  
	   while($rpoo = mysql_fetch_array($qp)){
	  $code=$rpoo['idcode'];//كود المشروع
	   $date=$rpoo['datepro'];//التاريخ
	 $lat=$rpoo['lat']; //اسم المشروع
	  $lng=$rpoo['lng'];//حالة المشروع
	  $nw=$rpoo['nuorworker'];
	  $pr=$rpoo['pric'];
	  $n=1;
	  $yu=$n+1;
	  ?>
             
<div id="<?php echo $code;?>000" class="modalDialog">
<div style="overflow:scroll;">
    <a href="#close" title="Close" class="close" style="top: 10px;">X</a>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">السجل التجاري الخاص برابح المناقصة</h2>
	<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">السجل الضريبي الخاص برابح المناقصة</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>

<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">اوراق ملكية الاراضي خاص او ملكية عامة</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>

 <h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">اوراق ملكية المصنع خاص او حكومة</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>
 
</div>
 


</div>

                          <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#<?php echo $code;?>000"  >
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>

                       
<?php } ?>
 
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"> كود المشروع <?php echo $code;?> تفاصيل المشروع</h4>
                        </div>
                        <div class="modal-body">
                        <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>
						</div>
                      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

                                 
<?php

} ?> </ul>
						 
						 
						 
						 
						 
						</div>  
					</div>
					<div id="step-4" class="content" style="display: block;">
                      <h2 class="StepTitle" >محتوى الخطوة الرابعة</h2>
                		
						  <div class="bs-glyphicons">
 
                        <ul class="bs-glyphicons-list">
						
						<?php    
 
	   $qp = mysql_query("SELECT * FROM addproject WHERE  pernu='11'");
 $qlll =mysql_query("SELECT proj FROM astbyan WHERE nu='11'");
       	
 		
	while($rpp = mysql_fetch_array($qlll)){
		$pername=$rpp['proj']; //اسم المشروع
	  $stauts=$rpp['status'];//حالة المشروع
	  
	   while($rpoo = mysql_fetch_array($qp)){
	  $code=$rpoo['idcode'];//كود المشروع
	   $date=$rpoo['datepro'];//التاريخ
	 $lat=$rpoo['lat']; //اسم المشروع
	  $lng=$rpoo['lng'];//حالة المشروع
	  $nw=$rpoo['nuorworker'];
	  $pr=$rpoo['pric'];
	  $n=1;
	  $yu=$n+1;
	  ?>
             
<div id="<?php echo $code;?>00" class="modalDialog">
<div style="overflow:scroll;">
    <a href="#close" title="Close" class="close" style="top: 10px;">X</a>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">المشاركين بالاراضي</h2>
	<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">المشاركين بالمصانع</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>

<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">المشاركين بالخامات</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>

 <h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">رابح المناقصة</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
 </div>
 
</div>
 


</div>

                          <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#<?php echo $code;?>00"  >
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>

                       
<?php } ?>
 
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"> كود المشروع <?php echo $code;?> تفاصيل المشروع</h4>
                        </div>
                        <div class="modal-body">
                        <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>
						</div>
                      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

                                 
<?php

} ?> </ul>
						 
						 
						 
						 
						 
						</div> 
					
					</div><div id="step-3" class="content" style="display: none;">
                        <h2 class="StepTitle">محتوى الخطوة الثالثة</h2>
                         
                        <div class="bs-glyphicons">
 
                        <ul class="bs-glyphicons-list">
						
						<?php    
 
	   $qp = mysql_query("SELECT * FROM addproject WHERE  pernu='11'");
 $qlll =mysql_query("SELECT proj FROM astbyan WHERE nu='11'");
       	
 		
	while($rpp = mysql_fetch_array($qlll)){
		$pername=$rpp['proj']; //اسم المشروع
	  $stauts=$rpp['status'];//حالة المشروع
	  
	   while($rpoo = mysql_fetch_array($qp)){
	  $code=$rpoo['idcode'];//كود المشروع
	   $date=$rpoo['datepro'];//التاريخ
	 $lat=$rpoo['lat']; //اسم المشروع
	  $lng=$rpoo['lng'];//حالة المشروع
	  $nw=$rpoo['nuorworker'];
	  $pr=$rpoo['pric'];
	  $n=1;
	  $yu=$n+1;
	  ?>
             
<div id="<?php echo $code;?>0" class="modalDialog">
<div style="overflow:scroll;">
    <a href="#close" title="Close" class="close" style="top: 10px;">X</a>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">تكلفة المواد</h2>
	<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
	<table class="tg">
  <tbody><tr>
    
    
    <th class="tg-6nwz"rowspan="2">اجمالى قيمة المنفذ</th>
   
    <th class="tg-6nwz"rowspan="2">سعر الوحدة</th>
   <th class="tg-6nwz" colspan="3">بيان بالكميات</th>
    <th class="tg-6nwz" rowspan="2">كمية</th>
    <th class="tg-6nwz" rowspan="2">الوحدة</th>
    <th class="tg-6nwz" rowspan="2">المادة</th>
    <th class="tg-6nwz" rowspan="2">كود المادة</th>
    <th class="tg-6nwz" rowspan="2">م</th>
  </tr>
<tr>
    
     <th class="tg-6nwz">الاجمالى</th>
    <th class="tg-6nwz">حالى</th>
    <th class="tg-6nwz">سابق</th>
   
  </tr>
  <?php    
 $fill= mysql_query("SELECT * FROM price WHERE  pro='11' and idpro='".$rpoo['idcode']."' and kind='A' ");
 
	    while($getfill = mysql_fetch_array($fill)){
		
	  $title=$getfill['tit'];//اسم المادة
	  $price=$getfill['pri'];
	  $setdate=$getfill['dat'];
	  $setnm=$getfill['nm'];
	  $setidmaterial=$getfill['idprotool'];
	  $setunit=$getfill['unit'];
	  $setamount=$getfill['amount'];
	  $setlast=$getfill['last'];
	  $setnow=$getfill['now'];
	  $setkind=$getfill['kind'];
	  
	  $settot=$setlast+$setnow;
	  $setall=$price*$settot;
	 
	  ?>
  <tr>
     
     
    <td class="tg-baqh"><?php echo $setall; ?></td>
    <td class="tg-j0tj"><?php echo $price; ?></td>
    <td class="tg-j0tj"><?php echo $settot; ?></td>
    <td class="tg-j0tj"><?php echo $setnow; ?></td>
    <td class="tg-j0tj"><?php echo $setlast; ?></td>
    <td class="tg-j0tj"><?php echo $setamount; ?></td>
    <td class="tg-baqh"><?php echo $setunit; ?></td>
    <td class="tg-j0tj"><?php echo $title; ?></td>
    <td class="tg-lqy6"><?php echo $setidmaterial; ?></td>
    <td class="tg-6k2t"><?php echo $setnm; ?></td>
  </tr>
   <?php
		}
 
  ?>
  <tr>
     
     
    <td class="tg-baqh">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-baqh">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-baqh">الاجمــــــــــــــالى</td>
    <td class="tg-6k2t"></td>
  </tr>
</tbody></table>
</div>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">تكلفة المصناعيات</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
<table class="tg">
  <tbody><tr>
    
    
    <th class="tg-6nwz"rowspan="2">اجمالى قيمة المنفذ</th>
 
    <th class="tg-6nwz"rowspan="2">سعر الوحدة</th>
   <th class="tg-6nwz" colspan="3">بيان بالكميات</th>
    <th class="tg-6nwz" rowspan="2">كمية</th>
    <th class="tg-6nwz" rowspan="2">الوحدة</th>
    <th class="tg-6nwz" rowspan="2">المادة</th>
    <th class="tg-6nwz" rowspan="2">كود المادة</th>
    <th class="tg-6nwz" rowspan="2">م</th>
  </tr>
<tr>
    
     <th class="tg-6nwz">الاجمالى</th>
    <th class="tg-6nwz">حالى</th>
    <th class="tg-6nwz">سابق</th>
   
  </tr>
  
     <?php    
 $fil= mysql_query("SELECT * FROM price WHERE  pro='11' and idpro='".$rpoo['idcode']."' and kind='B' ");
 
	    while($getfil = mysql_fetch_array($fil)){
		
	  $title=$getfil['tit'];//اسم المادة
	  $price=$getfil['pri'];
	  $setdate=$getfil['dat'];
	  $setnm=$getfil['nm'];
	  $setidmaterial=$getfil['idprotool'];
	  $setunit=$getfil['unit'];
	  $setamount=$getfil['amount'];
	  $setlast=$getfil['last'];
	  $setnow=$getfil['now'];
	  $setkind=$getfil['kind'];
	  
	  $settot=$setlast+$setnow;
	  $setall=$price*$settot;
	   
	  ?>
  <tr>
     
     
    <td class="tg-baqh"><?php echo $setall; ?></td>
    <td class="tg-j0tj"><?php echo $price; ?></td>
    <td class="tg-j0tj"><?php echo $settot; ?></td>
    <td class="tg-j0tj"><?php echo $setnow; ?></td>
    <td class="tg-j0tj"><?php echo $setlast; ?></td>
    <td class="tg-j0tj"><?php echo $setamount; ?></td>
    <td class="tg-baqh"><?php echo $setunit; ?></td>
    <td class="tg-j0tj"><?php echo $title; ?></td>
    <td class="tg-lqy6"><?php echo $setidmaterial; ?></td>
    <td class="tg-6k2t"><?php echo $setnm; ?></td>
  </tr>
   <?php
		}
 
  ?>
  
  <tr>
     
    <td class="tg-j0tj">-</td>
   
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-baqh">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-baqh">الاجمــــــــــــــالى</td>
    <td class="tg-6k2t"></td>
  </tr>
</tbody></table>
</div>

<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">المرتبات</h2>
<div style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
<table class="tg">
  <tbody>
  <tr>
    <th class="tg-6nwz">مدة العمل</th>
    <th class="tg-6nwz">منح</th>
    <th class="tg-6nwz">جزاءات</th>
    <th class="tg-6nwz">المرتب</th>
	<th class="tg-6nwz">تاريخ العمل</th>
    <th class="tg-6nwz">وظيفة العضو</th>
    <th class="tg-6nwz">اسم العضو</th>
    <th class="tg-6nwz">م</th>
  </tr>
  
     <?php    
 $fi= mysql_query("SELECT * FROM salary WHERE  pro='11' and idpro='".$rpoo['idcode']."'  ");
 
	    while($getfi= mysql_fetch_array($fi)){
		
	   $tnm=$getfi['nm']; 
	   $tname=$getfi['name'];
	   $tjob=$getfi['job'];
	   $tdate=$getfi['date'];
	   $tsalr=$getfi['salary'];
	   $tpun=$getfi['punch'];
	   $tbouns=$getfi['bouns'];
	   $ttime=$getfi['time'];
	    
	   
	  ?>
  <tr>
     
      
    <td class="tg-j0tj"><?php echo $ttime; ?></td>
    <td class="tg-j0tj"><?php echo $tbouns; ?></td>
    <td class="tg-j0tj"><?php echo $tpun; ?></td>
    <td class="tg-j0tj"><?php echo $tsalr; ?></td>
    <td class="tg-baqh"><?php echo $tdate; ?></td>
    <td class="tg-j0tj"><?php echo $tjob; ?></td>
    <td class="tg-lqy6"><?php echo $tname; ?></td>
    <td class="tg-6k2t"><?php echo $tnm; ?></td>
  </tr>
   <?php
		}
 
  ?>
  <tr>
    <td class="tg-baqh">-</td>
    <td class="tg-j0tj">-</td>
    <td class="tg-baqh">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-baqh">0</td>
    <td class="tg-j0tj">0</td>
    <td class="tg-baqh">الاجمــــــــــــــالى</td>
    <td class="tg-6k2t"></td>
  </tr>
</tbody>
</table>
</div>

<style type="text/css">

.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:3px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:rgba(49, 81, 108, 0.55);color:#438ac6;background-color:rgba(31, 37, 59, 0.48);}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:rgba(77, 137, 37, 0.48);color:#24c236;background-color:rgba(40, 83, 73, 0.28);}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-lqy6{text-align:right;vertical-align:top}
.tg .tg-6nwz{font-size:14px;text-align:center;vertical-align:top}
.tg .tg-j0tj{background-color:#213145;text-align:center;vertical-align:top}
.tg .tg-6k2t{background-color:#213145;vertical-align:top}
</style>
 
</div>
 


</div>

                          <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#<?php echo $code;?>0"  >
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>

                       
<?php } ?>
 
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"> كود المشروع <?php echo $code;?> تفاصيل المشروع</h4>
                        </div>
                        <div class="modal-body">
                        <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>
						</div>
                      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

                                 
<?php

} ?> </ul>
						 
						 
						 
						 
						 
						</div> 
                   
                      </div>
					   <div id="step-2" class="content" style="display: none;">
<div class="bs-glyphicons">
<style>
.modalDialog {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        opacity:0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
    }
    .modalDialog:target {
        opacity:1;
        pointer-events: auto;
    }
    .modalDialog > div {
        width: 400px;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
    }
    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
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
                        <ul class="bs-glyphicons-list"><?php    
                   
	   $qp = mysql_query("SELECT * FROM addproject WHERE  pernu='11'");
 $qlll =mysql_query("SELECT proj FROM astbyan WHERE nu='11'");
       	
	while($rpp = mysql_fetch_array($qlll)){
		$pername=$rpp['proj']; //اسم المشروع
	  $stauts=$rpp['status'];//حالة المشروع
	  
	   while($rpoo = mysql_fetch_array($qp)){
	  $code=$rpoo['idcode'];//كود المشروع
	   $date=$rpoo['datepro'];//التاريخ
	 $lat=$rpoo['lat']; //اسم المشروع
	  $lng=$rpoo['lng'];//حالة المشروع
	  $nw=$rpoo['nuorworker'];
	  $pr=$rpoo['pric'];
	  $n=1;
	  $yu=$n+1;
	  ?>
                    
<div id="<?php echo $code;?>" class="modalDialog">
<div style="overflow:scroll;">
    <a href="#close" title="Close" class="close"  style="top: 10px;">X</a>
<h2 style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);"> Project : <?php echo $code;?></h2>
<p>Date : <?php echo $date; ?> & N.O. Of Worker : <?php echo  $nw; ?> & Price of project : <?php echo $pr; ?></p>
<?php 
if($code==$rpoo['idcode']){
			   $code=$rpoo['idcode'];
	$se=mysql_query("SELECT `perid`,`procode` FROM `userpor` WHERE `perid`='".$userRow['userId']."' And `procode`='$code' And pronum='11'");
	$fi=mysql_fetch_array($se);
	$counte = mysql_affected_rows();  // if uname/pass correct it returns must be 1 row
if($counte == 1){
	
	echo 'you are joined to this project';
 }else{
?>
	  <form id='myform' action='insertpro.php' method="post">
   
                          <a href="#<?php echo $code; ?>">mmmm</a>   
						<input type ="text" name="name" maxlength="3" placeholder="قم بإدخال المبلغ"  value="0"  >
						<input type ="text" name="code" maxlength="3" style="display:none;" placeholder="قم بإدخال المبلغ"  value="<?php echo $code; ?>"  >
						<input type ="text" name="codenm" maxlength="3" style="display:none;" placeholder="قم بإدخال المبلغ"  value="11"  >
						
						<input type="submit" name="submit" class="buttonNext btn btn-success" value="قم بالاشتراك" />
						 </form>
						 <?php
	   }}
						 ?>
						 <?php
						 $pn=11;
			include('insertpro.php');
		?>
</div>
</div>

                          <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#<?php echo $code;?>"  >
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>

                       
<?php } ?>
 
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"> كود المشروع <?php echo $code;?> تفاصيل المشروع</h4>
                        </div>
                        <div class="modal-body">
                        <li>
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                            <span class="glyphicon-class"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
							<?php echo $code;?></br>
							<?php echo $rpp['proj'];?></br>
							<?php echo $rpoo['lat'];?><a>,</a><?php echo $rpoo['lng'];?>
							</a>
							</span>
                          </li>
						</div>
                      
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

                                 
<?php

} ?> </ul>
                      </div>
                      </div>
					  <div id="step-1" class="content" style="display: none;">
                        <h2 class="StepTitle">محتوى الخطوة الاولى</h2>
                          
                      </div></div>
                    <!-- End SmartWizard Content -->





                    
                    
                    
                    
                  </div>
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
</div></div></div></body>

</html>