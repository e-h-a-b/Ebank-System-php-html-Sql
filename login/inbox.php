<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
      <!-- Meta, title, CSS, favicons, etc. -->
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
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
   
 
  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
     

    
     <?php include('Sidemenu.php'); ?>

  <!-- top navigation -->
        <div class="top_nav" style="margin-left: 0px;width: 100%;">
    

<div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-left" style="margin-left: 50px;">
                <li class="">
                  
				   <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <img src="<?php echo $userRow['userpic'];?>" alt="Avatar" style="max-width:100px;max-height:100px;" />
    	                <?php echo  $userRow['userName']; ?>                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-left">
                    <li><a href="http://ebank.esy.es/login/yourinfo.php"> الملف الشخصي</a></li>
                    <li>
                      <a href="http://ebank.esy.es/pm/edit_infos.php">
                        <!--<span class="badge bg-red pull-right">20%</span>-->
                        <span>خصائص</span>
                      </a>
                    </li>
                    <li><a href="http://ebank.esy.es/help.html">مساعدة</a></li>
                    <li><a href="logout.php?logout"><i class="fa fa-sign-out pull-right"></i> تسجيل خروج</a></li>
                  </ul>
                </li>
<?php
//We check if the user is logged
if(isset($_SESSION['user']))
{
//We list his messages in a table
//Two queries are executes, one for the unread messages and another for read messages



$req1 = mysql_query('select m1.userId, m1.title, m1.timestamp,
 count(m2.userId) as reps, users.userId as  Id,
 users.userName from pm as m1, pm as m2,users where ((m1.user1="'.$userRow['userId'].'" and m1.user1read="no" and users.userId=m1.user2)
 or (m1.user2="'.$userRow['userId'].'" and m1.user2read="no" and users.userId=m1.user1))
 and m1.id2="1" and m2.userId=m1.userId group by m1.userId order by m1.userId desc');


$req2 = mysql_query('select m1.userId, m1.title, m1.timestamp,
 count(m2.userId) as reps, users.userId as  Id,
 users.userName from pm as m1, pm as m2,users where ((m1.user1="'.$userRow['userId'].'" and m1.user1read="yes" and users.userId=m1.user2)
 or (m1.user2="'.$userRow['userId'].'" and m1.user2read="yes" and users.userId=m1.user1))
 and m1.id2="1" and m2.userId=m1.userId group by m1.userId order by m1.userId desc');


?>
                  <li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/login/inbox.php" ><!--class="dropdown-toggle info-number" id="md" data-toggle="dropdown" aria-expanded="false"-->
                     
                  <i class="fa fa-envelope-o" id="md"></i> 
                    <?php
					if(mysql_num_rows($req1)==0){
					}else{
                    echo' <span class="badge bg-red">';
				    echo intval(mysql_num_rows($req1)); 
					echo'</span>';
					}
					?>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
              <!-- <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>&#1593;&#1576;&#1583; &#1575;&#1604;&#1604;&#1607;</span>
                          <span class="time">&#1605;&#1606;&#1584; 3 &#1583;&#1602;&#1575;&#1574;&#1602;</span>
                        </span>
                        <span class="message">
                        &#1576;&#1575;&#1585;&#1603; &#1575;&#1604;&#1604;&#1607; &#1601;&#1610;&#1603; &#1608;&#1608;&#1575;&#1601;&#1602;&#1603; &#1575;&#1604;&#1604;&#1607; &#1604;&#1605;&#1575; &#1601;&#1610;&#1577; &#1606;&#1601;&#1593;&#1575; &#1604;&#1604;&#1605;&#1587;&#1604;&#1605;&#1610;&#1606;
					   </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>&#1585;&#1587;&#1575;&#1604;&#1577; &#1575;&#1604;&#1576;&#1606;&#1603;</span>
                          <span class="time">&#1605;&#1606;&#1584; 3 &#1583;&#1602;&#1575;&#1574;&#1602;</span>
                        </span>
                        <span class="message">
                          &#1604;&#1602;&#1583; &#1606;&#1580;&#1581; &#1575;&#1604;&#1605;&#1588;&#1585;&#1608;&#1593; &#1608;&#1608;&#1589;&#1604;&#1578; &#1575;&#1585;&#1576;&#1575;&#1581;&#1603; &#1575;&#1604;&#1609; 1500 &#1580;&#1606;&#1610;&#1577;
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>&#1605;&#1581;&#1605;&#1608;&#1583; &#1575;&#1581;&#1605;&#1583;</span>
                          <span class="time">&#1605;&#1606;&#1584; 3 &#1583;&#1602;&#1575;&#1574;&#1602;</span>
                        </span>
                        <span class="message">
                          &#1610;&#1575;&#1590; &#1575;&#1593;&#1604;&#1609; &#1576;&#1602;&#1608;&#1604;&#1603; &#1610;&#1575;&#1590; &#1575;&#1606;&#1575; &#1575;&#1588;&#1578;&#1585;&#1603;&#1578; &#1601;&#1609; &#1575;&#1604;&#1605;&#1588;&#1585;&#1608;&#1593; &#1575;&#1585;&#1576;&#1575;&#1581;&#1609; &#1607;&#1578;&#1576;&#1602;&#1609; &#1575;&#1605;&#1578;&#1609; &#1610;&#1575;&#1604;&#1607;
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="./Gentallela Alela! __files/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>&#1593;&#1605;&#1575;&#1583; &#1605;&#1581;&#1605;&#1583;</span>
                          <span class="time">&#1605;&#1606;&#1584; 3 &#1583;&#1602;&#1575;&#1574;&#1602;</span>
                        </span>
                        <span class="message">
                          &#1575;&#1593;&#1604;&#1609; &#1605;&#1578;&#1606;&#1587;&#1575;&#1588; &#1610;&#1575;&#1590; &#1606;&#1583;&#1582;&#1604; &#1575;&#1604;&#1605;&#1588;&#1585;&#1608;&#1593; &#1583;&#1575; &#1610;&#1575;&#1590; &#1575;&#1606;&#1575; &#1608;&#1575;&#1606;&#1578; &#1608;&#1606;&#1606;&#1586;&#1604; &#1606;&#1601;&#1593;&#1575; &#1575;&#1604;&#1576;&#1604;&#1583; &#1576;&#1602;&#1609; &#1610;&#1575;&#1604;&#1607;
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>&#1575;&#1592;&#1607;&#1585; &#1580;&#1605;&#1610;&#1593; &#1575;&#1604;&#1585;&#1587;&#1575;&#1574;&#1604;</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>-->
                  
				 </ul>
<script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script>
  document.getElementById("20000").onclick = function () {
    location.href = "http://ebank.esy.es/chat/chat.html";
};
</script>
                </li>
				<li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/chat/chat.html"><!-- class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"-->
                    <i class="fa fa-wechat" id="wwbchat"></i>
                    
                  </a>
                 <!-- <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
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
                    
                    
                  </ul>-->
</li><li role="presentation" class="dropdown">
              <a href="https://www.facebook.com/%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%89-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A-319963795063101/"  target="_blank" title="البنك الالكترونى المصري">
  <i class="fa fa-facebook"></i>

</a>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/login/n.php"><!-- class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"-->
                    <i class="fa fa-users" id="wwbchat"></i>
                    
                  </a>
               <!--   <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
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
                    
                    
                  </ul>-->
</li>
                 <li role="presentation" class="dropdown">
                  <a href="http://ebank.esy.es/notifications.html"><!-- class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"-->
                    <i class="fa fa-globe" id="globe"></i>
                    
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                   
				   
                    
                  </ul>
                </li>  
<li class=""> 
				<div id="head">
		           <?php include('head.php');?>
	            </div>
	           </li>				
			 </ul>
            </nav>
          </div>

    </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1093px; height: 1150px;">          <!-- top tiles -->
           <?php include('../login/stripuser.php'); ?>
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

		  
		  
		  
		  
		  <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title" dir="rtl">
                    <h>&#1589;&#1606;&#1583;&#1608;&#1602; &#1575;&#1604;&#1585;&#1587;&#1575;&#1574;&#1604; &#1575;&#1604;&#1582;&#1575;&#1589; &#1576;&#1603;<small>&#1575;&#1604;&#1589;&#1575;&#1583;&#1585; &#1608;&#1575;&#1604;&#1608;&#1575;&#1585;&#1583;</small></h>
                    <ul class="nav navbar-left panel_toolbox">
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
                      
                      <!-- /MAIL LIST -->
<style>
.mail_view{
	border-left: 1px solid #287d3e;
	
}
.mail_list_column {
    border-left: 1px solid #287d3e;
}
.mail_heading h4 {
    font-size: 18px;
    border-bottom: 1px solid #287d3e;
    padding-bottom: 10px;
    margin-top: 20px;
}
</style>
                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view" dir="rtl">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            <div class="col-md-8">
                              <div class="btn-group">
                                <button class="btn btn-sm btn-primary" type="button" ><i class="fa fa-reply"></i>&#1575;&#1604;&#1585;&#1583; &#1593;&#1604;&#1609; &#1575;&#1604;&#1585;&#1587;&#1575;&#1604;&#1577;</button>
                                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="&#1575;&#1604;&#1609; &#1575;&#1604;&#1575;&#1605;&#1575;&#1605;"><i class="fa fa-share"></i></button>
                                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="&#1591;&#1576;&#1575;&#1593;&#1577;"><i class="fa fa-print"></i></button>
                                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="&#1581;&#1584;&#1601;"><i class="fa fa-trash-o"></i></button>
                              </div>
                            </div>
                            <div class="col-md-4 text-right">
                              <p class="date"> 8:02 PM 12 FEB 2014</p>
                            </div>
                            <div class="col-md-12">
                              <h4>&#1606;&#1588;&#1603;&#1585;&#1603; &#1610;&#1575; &#1593;&#1604;&#1610; &#1593;&#1604;&#1609; &#1607;&#1584;&#1607; &#1575;&#1604;&#1605;&#1588;&#1585;&#1603;&#1577;</h4>
                            </div>
                          </div>
                          <div class="sender-info">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>&#1593;&#1576;&#1583; &#1575;&#1604;&#1604;&#1607;</strong>
                                <span>(abd-allah@ebank.esy.es)</span> &#1605;&#1585;&#1587;&#1604;
                                <strong>&#1604;&#1603;</strong>
                                <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="view-mail">
                            <p>
							
							<?php   include("remesg.php"); ?>
							</p>
							<div id="imgdiv"> </div>
                            <script>                
window.onload = function(){     
        $("#imgdiv").load('remesg.php?id=43');           
}
</script>
                          </div>
						  
                        </div>
    </div>

		
	
    <div class="col-sm-3 mail_list_column">
<div style="overflow: hidden;overflow-y:scroll;max-height: 257px;">
  
<table>
	
<?php
//We display the list of unread messages
while($dn1 = mysql_fetch_array($req1))
{
	
?>
		
	<tr>
	<div style="border: 1px solid #275c68;background: rgba(8, 14, 16, 0.25);margin-bottom: 10px;">
  <a href="http://ebank.esy.es/pm/profile.php?id=<?php echo $dn1['userId']; ?>"><?php echo htmlentities($dn1['userName'], ENT_QUOTES, 'UTF-8'); ?></a>
<div style="display: flex;">
<p style="margin-left: 20px;"><?php echo $dn1['reps']-1; ?></p>
  <h style="margin-left: 20px;">
<a href="http://ebank.esy.es/pm/read_pm.php?id=<?php echo $dn1['userId']; ?>"><?php echo htmlentities($dn1['title'], ENT_QUOTES, 'UTF-8'); ?></a>
</h>

            </div>                 
          <small><?php echo date('Y/m/d H:i:s' ,$dn1['timestamp']); ?></small>
                
  </div>	
    </tr>
					         
<?php
}
//If there is no unread message we notice it
if(intval(mysql_num_rows($req1))==0)
{
?>
	<tr>
    	<td colspan="4" class="center">لا توجد رسائل</td>
    </tr>
<?php
}
?>
</table>  
</div>
       <div class="content">

<br />
<a href="http://ebank.esy.es/pm/new_pm.php" class="btn btn-sm btn-success btn-block">ارسل رسالة</a>
<h3>عدد الرسائل المقرؤة <?php echo intval(mysql_num_rows($req2)); ?></h3>
<div style="overflow: hidden;overflow-y:scroll;height: 257px;">

<table>
<?php
//We display the list of read messages
while($dn2 = mysql_fetch_array($req2))
{
?>
	<tr role="row" class="odd">
    	
		<div style="border: 1px solid #275c68;background: rgba(8, 14, 16, 0.25);margin-bottom: 10px;">
    	<a href="http://ebank.esy.es/pm/profile.php?userName=<?php echo $dn2['userName']; ?>"><?php echo htmlentities($dn2['userName'], ENT_QUOTES, 'UTF-8'); ?></a>
    	<br />
		<div style="display: flex;">
		<a  style="margin-left: 20px;"><?php echo $dn2['reps']-1; ?></a>
		<br />    
		<a   style="margin-left: 20px;" href="http://ebank.esy.es/pm/read_pm.php?id=<?php echo $dn2['userId']; ?>"><?php echo htmlentities($dn2['title'], ENT_QUOTES, 'UTF-8'); ?></a>
    	</div>
		<br />
		<div><?php echo date('Y/m/d H:i:s' ,$dn2['timestamp']); ?></div>
		</div>
    </tr>
<?php
}
//If there is no read message we notice it
if(intval(mysql_num_rows($req2))==0)
{
?>
	<tr>
    	<td colspan="4" class="center">لاتوجد رسائل مقروءة</td>
    </tr>
<?php
}
?>
</table>
</div>
<?php
}
else
{
	echo 'You must be logged to access this page.';
}
?>
		</div>
		    <!-- footer content 
        <footer style="margin-left: 0px;margin-right: 230px;">
          <div class="pull-right">
            البنك الالكترونى المصري|e-ebank  <a href="">السميز بالكامل منColorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
         /footer content -->
                      </div>
					  
					  </div>
					  </div>
</div>
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

	
<script src="https://colorlib.com/polygon/vendors/vendors/jquery/dist/jquery.min.js"></script>
<script src="https://colorlib.com/polygon/vendors/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/polygon/vendors/vendors/fastclick/lib/fastclick.js"></script>

<script src="https://colorlib.com/polygon/vendors/vendors/nprogress/nprogress.js"></script>

<script src="https://colorlib.com/polygon/vendors/build/js/custom.min.js"></script>
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
    labelNext:'&#1578;&#1602;&#1583;&#1605;',
    labelPrevious:'&#1585;&#1580;&#1608;&#1593;',
    labelFinish:'&#1575;&#1606;&#1607;&#1575;&#1569;',
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
	
	
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"http://www.ebank.esy.es/nof/fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdow').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
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

  </div>
 
	</body>
	
	
<?php   
		$_GET['id'] = 12;
       include('../login/visitor.php');
	   ?> 


</html>