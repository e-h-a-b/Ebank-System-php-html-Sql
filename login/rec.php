<?php
ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	
$form = true;
$result1 = mysql_query("SELECT * FROM len");
$result2 = mysql_query("SELECT * FROM len1");
$result03 = mysql_query("SELECT * FROM len2");
$result3 = mysql_query("SELECT * FROM len3");
$result4 = mysql_query("SELECT * FROM len4");
$result5 = mysql_query("SELECT * FROM len5");
$result6 = mysql_query("SELECT * FROM Len6");
$result7 = mysql_query("SELECT * FROM len7");
$result8 = mysql_query("SELECT * FROM len8");
$result9 = mysql_query("SELECT * FROM len9");


$num_rows1 = mysql_num_rows($result1);
$num_rows2 = mysql_num_rows($result2);
$num_rows03 = mysql_num_rows($result03);
$num_rows3 = mysql_num_rows($result3);
$num_rows4 = mysql_num_rows($result4);
$num_rows5 = mysql_num_rows($result5);
$num_rows6 = mysql_num_rows($result6);
$num_rows7 = mysql_num_rows($result7);
$num_rows8 = mysql_num_rows($result8);
$num_rows9 = mysql_num_rows($result9);

$t=$num_rows1+$num_rows2+$num_rows03+$num_rows3+$num_rows4+$num_rows5+$num_rows6+$num_rows7+$num_rows8+$num_rows9;

$result10 = mysql_query("SELECT * FROM codenter");
$num_rows10 = mysql_num_rows($result10);

//$c=$num_rows10;


$result11 = mysql_query("SELECT * FROM users");
$num_rows11 = mysql_num_rows($result11);

$R=$num_rows11;

?>
<?php
$x=1;
while( $x<=3) {
$number = "0123456789";
$numberS = str_shuffle($number);
$subA="5";
$subB="6";
$subC="4";
$subD="8";
$subE = substr($numberS,-2,1);
$subF = substr($numberS,-1,1);
$subG = substr($numberS,-3,1);
$subH = substr($numberS,-5,1);
$subI = substr($numberS,-6,1);
$subJ = substr($numberS,-7,1);
$subK = substr($numberS,9,1);
$subL = substr($numberS,3,1);
$subM = substr($numberS,6,1);
$subN = substr($numberS,7,1);
$subO = substr($numberS,8,1);
$subP = substr($numberS,1,1);
$subQ = substr($numberS,2,1);
$chex=10+8+$subE*2+$subG*2+$subI*2+$subK*2+$subM*2+$subO*2;
$chey=6+8+$subF+$subH+$subJ+$subL+$subN+$subP;
$cheCard=$chex+$chey+$subQ;
// check email exist or not

		
if($cheCard=120){
		$bt =$subA.$subB.$subC.$subD.$subE.$subF.$subG.$subH.$subI.$subJ.$subK.$subL.$subM.$subN.$subO.$subP.$subQ; 
 $bt1=($subE*2).($subG*2).($subI*2).($subK*2).($subM*2).($subO*2);
	
 }
  $x++;
} 
			$query = "SELECT card_num FROM record WHERE card_num='$bt'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
if($count==0){
$_POST['crd']=$bt;
$Card=$bt;
$Card1=$bt1;
}
//	$n1=$post['p'];$n2=$post['p'];$n3=$post['p'];$n4=$post['p'];$n5=$post['p'];$n6=$post['p'];$n7=$post['p'];
	
//if(isset($_POST['userr'])){
//	mysql_query('insert into record(coden, cardnum, idper, tim) values ("'.$codn.'", "'.$cardn.'", "'.$idper.'", "'.$date.'")');
//}
if(isset($_POST['btn-signup'])){
             	//We protect the variables
				$adrs= trim($_POST['adrs']);
		        $adrs= strip_tags($adrs);
		        $adrs= htmlspecialchars($adrs);
		        
				$area= trim($_POST['area']);
		        $area= strip_tags($area);
		        $area= htmlspecialchars($area);
		
		        $idper= trim($_POST['idpers']);
		        $idper= strip_tags($idper);
		        $idper= htmlspecialchars($idper);
		      
			    $pr1= trim($_POST['pr1']);
		        $pr1= strip_tags($pr1);
		        $pr1= htmlspecialchars($pr1);
		
		        $pr2= trim($_POST['pr2']);
		        $pr2= strip_tags($pr2);
		        $pr2= htmlspecialchars($pr2);
		
				 $crd= $Card;
				
				 $crd1= $Card1;
				$date = date('Y-m-d h:i:s A');
               // basic name validation
		if (empty($adrs)) {
			$error = true;
			$drsError = "من فضلك ادخل العنوان*";
		} 
		
		if (empty($area)) {
			$error = true;
			$areaError = "من فضلك ادخل المنطقة*";
		} 
		if (empty($idper)) {
			$error = true;
			$idperError = "من فضلك ادخل رقم البطاقة*";
	    } else if(strlen($idper) < 13) {
			$error = true;
			$idperError = "من فضلك ادخل ارقام البطاقة  الصحيحة*";
		
		}  else if (!preg_match("/^[0-9]+$/",$idper)) {
			$error = true;
			$idperError = "*1من فضلك ادخل ارقام البطاقة  الصحيحة";
			
		}else {
			// check email exist or not
			$query = "SELECT * FROM record WHERE persid='$idper'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "هذه البطاقة موجودة بالفعل بسجلاتنا نأسف لكم*";
			}
		}
		 //numbers
		 if (empty($pr1)) {
		$error = true;
			$pr1Error = "من فضلك ادخل السهم *";
		 } 
 	    if (empty($pr2)) {
			$error = true;
			$pr2Error = "من فضلك ادخل المحافظة*";
		}
		 if (empty($crd)) {
			$error = true;
			$crdError = "1ربما يوجد مثيل*";
		}
		 if (empty($crd1)) {
			$error = true;
			$crd1Error = "ربما يوجد مثيل2*";
		}
//adress
//ID
//join
//card_num
//persid
//city
//area
//Date
if( !$error ) {
			$dn2 = mysql_num_rows(mysql_query('select Nm from record'));
			$id = $dn2+1;
			
		//	$query = "INSERT INTO record(adress, ID, join,card_num, persid,city,area,Date) VALUES ('$adrs', '$Card1', '$pr1','$Card','$idper','$pr2','$area','$date')";
//mysql_query('insert into record(adress, ID, join,card_num, persid,city,area,Date) values ("'.$adrs.'", "'.$Card1.'", "'.$pr1.'", "'.$Card.'","'.$idper.'","'.$pr2.'","'.$area.'","'.$date.'")')	;		
			  
			  
			$ress = mysql_query($query);
				
				//We check if there is no other user using the same username
				//$dn = mysql_num_rows(mysql_query('select * from record where persid="'.$idper.'" or card_num="'.$Card.'" or ID="'.$Card1.'"'));
				
				//if($dn==1 )
			

		mysql_query("INSERT INTO `record` (`adress`, `ID`,`join`,`card_num`, `persid`,`city`,`area`,`Date`,`Nm`) VALUES ('$adrs', '$Card1', '$pr1','$Card','$idper','$pr2','$area','$date','$id')");
$form = false;

header( 'Location: http://ebank.esy.es/login/rec.php' );
exit;
}
}
$re = mysql_query("SELECT * FROM record");
$num50= mysql_num_rows($re);

$c=$num50;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
	"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>صفــحة حجز الاسهم |البنك الالكتروني |العقل ضد الغلاء</title>

<meta property="og:title" content="احجز اسهم فى البنك الالكتروني"/>
<meta property="og:image" content="http://ebank.esy.es/login/rec.php"/>
<meta property="og:description" content="احجز اسهم الان فى البنك الالكتروني">
<script type="text/javascript" src="scroll/js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="scroll/js/jquery.scrollTo.js"></script>
  <!-- Bootstrap -->
    <link href="https://colorlib.com/polygon/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/jquery-jvectormap-2.0.3.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://ebank.esy.es/login/Gentallela Alela! __files/custom.min.css" rel="stylesheet">
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

$(document).ready(function() {

	$('a.panel').click(function () {

		$('a.panel').removeClass('selected');
		$(this).addClass('selected');
		
		current = $(this);
		
		$('#wrapper').scrollTo($(this).attr('href'), 800);		
		
		return false;
	});

	$(window).resize(function () {
		resizePanel();
	});
	
});

function resizePanel() {

	width = $(window).width();
	height = $(window).height();

	mask_width = width * $('.item').length;
		
	$('#debug').html(width  + ' ' + height + ' ' + mask_width);
		
	$('#wrapper, .item').css({width: width, height: height});
	$('#mask').css({width: mask_width, height: height});
	$('#wrapper').scrollTo($('a.selected').attr('href'), 0);
		
}

</script>

<style>

body {
	height:100%;
	width:100%;
	margin:0;padding:0;
	overflow:hidden;
}

#wrapper {
	width:100%;
	height:100%;
	position:absolute;
	top:0;left:0;
	background-color:#ccc;
	overflow:hidden;
}

	#mask {
		width:500%;
		height:100%;
		background-color:#eee;
	}

	.item {
		overflow: scroll;
		width:20%;
		height:100%;
		float:left;
		background-color:#2A3F54;
		background-image: linear-gradient(rgba(255,255,255,.05) 2px, transparent 2px), linear-gradient(90deg, rgba(255,255,255,.04) 2px, transparent 2px), linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(0deg, rgba(0,0,0,.3) 0, transparent 100px);background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px, 100% 100%;
	}
	
	
	.content0000 {
		width:100%;
		height:100%;
		top:0%;
		margin:0 auto;
		 
		position:relative;
		min-width: 891px;
    max-width: 1000px;
	}

	.content000 {font-size: 22px;top: 5px;height: 200px; width: 28.5%;left: 10px;top:0%; margin-left: 0px;background-color:rgba(0, 0, 0, 0.21);position: absolute;}
	.content00 {font-size: 22px;top: 5px;height: 200px; width: 28.5%;left: 10px;top:0%; margin-left: 960px;background-color:rgba(0, 0, 0, 0.21);position: absolute;}
	.content0 {font-size: 22px; width: 28.5%;left: 10px;top:220px; margin-left: 0px;}
	.content01 {font-size: 22px;height: 200px; width: 28.5%;left: 10px;top:220px; margin-left: 960px;background-color:rgba(0, 0, 0, 0.21);position: absolute;}
	
	
	.selected {
		background:#fff;
		font-weight:700;
	}

	.clear {
		clear:both;
	}

</style>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<div id="wrapper">
	<div id="mask">

		<div id="item1" class="item">
		 
		
			
			<?php 
			
			if($form=true)
{

			?>
			<div class="content0000"> 
			
				 <!-- page content -->
        <div class="right_col" role="main" style="
    margin-left: 15px;
    margin-right: 15px;
">          <!-- top tiles -->
          <div class="x_panel">
                  <div class="x_title" dir="rtl" >
                    <h2>حجز سهم<small>عدد الاسهم</small></h2>
					<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Febank.esy.es%2F&width=50&layout=box_count&action=like&size=small&show_faces=true&share=true&height=65&appId=1085015398192591" width="50" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						<span class="text-danger"><?php echo $drsError; ?></span>
	<span class="text-danger"><?php echo $areaError; ?></span>
	<span class="text-danger"><?php echo $idperError; ?></span>
	<span class="text-danger"><?php echo $pr1Error; ?></span>
	<span class="text-danger"><?php echo $pr2Error; ?></span>
	<span class="text-danger"><?php echo $crdError; ?></span>
	<span class="text-danger"><?php echo $crd1Error; ?></span>
	
					<div class="clearfix"></div>
                  </div>
                 <style>
				 .panel {
    background-color: transparent;
				 }
				 
				 </style>

			<div class="content0"> 
			                <a href="#item2"  class="panel"><span class="glyphicon glyphicon-tag" aria-hidden="true" title="مخطط بناء البنك"></span></a>
                          
                             <a href="#item3"  class="panel"><span class="glyphicon glyphicon-tags" aria-hidden="true" title="اماكن   .   استلام الحجز"></span></a>
							
							<a href="#item4"  class="panel"><span class="glyphicon glyphicon-book" aria-hidden="true" title="الاستعلامات"></span></a>
							
							<a href="#item5" class="panel"><span class="glyphicon glyphicon-bookmark" aria-hidden="true" title="للاتصــال"></span></a>
		  
			</div>
			
         <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="width: 150px;left: 50px;top: 50px;background: #092a35;">
		 
              <span class="count_top">عدد الاسهم الحالية<i class="fa fa-user"></i></span>
              <div class="count"><?php echo $t; ?></div>
           
               
            </div>
			  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="width: 150px;left: 50px;top: 50px;background: #151819;">
		    <span class="count_top">عدد الاعضاء<i class="fa fa-user"></i></span>
              <div class="green"><?php echo $R; ?></div>
			 </div>
			 <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="width: 150px;left: 50px;top: 50px;background: #101d21;">
		  <span class="count_top">عدد الاسهم المحجوزة<i class="fa fa-newspaper-o"></i></span>
              <div class="green"><?php echo $c; ?></div>
			   
		 </div>
		 <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="width: 150px;left: 50px;top: 50px;background: #13272d;">
		 
             
             <span class="count_top">تكلفة السهم<i class="fa fa-newspaper-o"></i></span>
              <div class="green">جنية 110 الى 11000 جنية</div>
              
			</div>
			 <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="width: 150px;left: 50px;top: 50px;background: #0b171b;">
		 
              <span class="count_top">عدد المشروعات<i class="fa fa-user"></i></span>
              <div class="green">0032</div>
             
            </div>
				 <div class="x_content" style="display: block;margin-top: 60px;">
                    <br>
             
			 <form method="post" action="rec.php" autocomplete="off">

                    
   
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

                      <div class="form-group"> 
					  <div class="col-md-1 col-sm-12 col-xs-12 form-group" style="width: 165px;">
                    <input  id="adrs" name="adrs" type="text" placeholder="مثال:ش.المتولى25 ل" class="form-control" style="width: 226px;" value="<?php if(isset($_POST['adrs'])){echo htmlentities($_POST['adrs'], ENT_QUOTES, 'UTF-8');} ?>">
                  </div><div class="col-md-1 col-sm-12 col-xs-12 form-group" style="width: 70px;left: 75px;padding-left: 0px;">
                    <input  id="area" name="area" type="text" placeholder="مثال:حلوان" class="form-control" style="width: 221px;" value="<?php if(isset($_POST['area'])){echo htmlentities($_POST['area'], ENT_QUOTES, 'UTF-8');} ?>">
                  </div><div class="col-md-1 col-sm-12 col-xs-12 form-group" style="width: 1px;">
                  <div class="col-md-9 col-sm-9 col-xs-12" style="left: 210px;">
                          <select class="form-control" style="width: 326px;" name="pr2">
				<!-- <option  >المحافظات</option>-->
				 <option  id="pr2" name="pr2" value="القاهرة">القاهرة	</option>
				 <option  id="pr2" name="pr2" value="الجيزة">الجيزة	</option>
				 <option  id="pr2" name="pr2" value="الشرقية">الشرقية	</option>
				 <option  id="pr2" name="pr2" value="الدقهلية">الدقهلية	</option>
				 <option  id="pr2" name="pr2" value="البحيرة">البحيرة	</option>
				 <option  id="pr2" name="pr2" value="المنيا">المنيا	</option>
				 <option  id="pr2" name="pr2" value="القليوبية">القليوبية	</option>
				 <option  id="pr2" name="pr2" value="الإسكندرية">الإسكندرية	</option>
				 <option  id="pr2" name="pr2" value="الغربية">الغربية	</option>
				 <option  id="pr2" name="pr2" value="سوهاج">سوهاج	</option>
				 <option  id="pr2" name="pr2" value="أسيوط">أسيوط	</option>
				 <option  id="pr2" name="pr2" value="المنوفية">المنوفية	</option>
				 <option  id="pr2" name="pr2" value="كفر الشيخ">كفر الشيخ	</option>
				 <option  id="pr2" name="pr2" value="الفيوم">الفيوم	</option>
				 <option  id="pr2" name="pr2" value="قنا">قنا	</option>
				 <option  id="pr2" name="pr2" value="بني سويف">بني سويف	</option>
				 <option  id="pr2" name="pr2" value="أسوان">أسوان	</option>
				 <option  id="pr2" name="pr2" value="دمياط">دمياط	</option>
				 <option  id="pr2" name="pr2" value="الإسماعيلية">الإسماعيلية	</option>
				 <option  id="pr2" name="pr2" value="الأقصر">الأقصر	</option>
				 <option  id="pr2" name="pr2" value="بورسعيد">بورسعيد	</option>
				 <option  id="pr2" name="pr2" value="السويس">السويس	</option>
				 <option  id="pr2" name="pr2" value="مطروح">مطروح	</option>
				 <option  id="pr2" name="pr2" value="شمال سيناء">شمال سيناء	</option>
				 <option  id="pr2" name="pr2" value="البحر الأحمر">البحر الأحمر	</option>
				 <option  id="pr2" name="pr2" value="الوادي الجديد">الوادي الجديد	</option>
				 <option  id="pr2" name="pr2" value="جنوب سيناء">جنوب سيناء	</option>
</select>
                        </div>
				 </div>
                        <style>
						.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #3e7d7d;
    background-color: rgba(21, 54, 74, 0.45);
    background-image: none;
    border: 1px solid #192926;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(167, 52, 52, 0.84);
    box-shadow: inset 0 1px 1px rgba(119, 14, 14, 0.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #18353a;
    opacity: 1;
}
						</style>
                       
                      </div>
                      <div class="form-group">
					   <div class="col-md-9 col-sm-9 col-xs-12">
                          <input  name="idpers"  type="numbers"  name="idpers"  class="form-control" readonly="readonly" value="<?php echo $Card1; ?>" required="required" placeholder="هذا هو التعريف الخاص بك">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">التعريف الخاص بك </label>
                       
                      </div>
					  <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="pr1">
                           <!-- <option>ثمن السهم</option>-->
                            <option  id="pr1" name="pr1" value="110 ">سهم ب110 جنية</option>
                            <option  id="pr1" name="pr1" value="550">سهم ب550 جنية</option>
                            <option  id="pr1" name="pr1" value="5500">سهم ب5500 جنية</option>
                            <option  id="pr1" name="pr1" value="11000">سهم ب11000 جنية</option>
                          </select>
                        </div><label class="control-label col-md-3 col-sm-3 col-xs-12">الاسهم التى ترغب بها</label>
                      </div>
					  <div class="form-group">
					   <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="numbers" class="form-control" disabled="disabled" value="<?php echo $Card; ?>" required="required" placeholder="رقم البنك الخاص بك" >
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">رقم البنك الخاص بك</label>
                       
                      </div>
                      <div class="form-group">
					  <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="idpers" type="numbers" name="idpers" class="form-control" required="required" placeholder="ادخل البطاقة الشخصية" value="<?php if(isset($_POST['idpers'])){echo htmlentities($_POST['idpers'], ENT_QUOTES, 'UTF-8');} ?>">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">البطاقة الشخصية</label>
                        
                      </div>
					     <div class="form-group">
 </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          
					<button type="submit" class="btn btn-primary">الغاء</button>
                          <button id="send" type="submit" class="btn btn-success"  name="btn-signup">احجز</button>
                        </div>
                      </div>

                    </form>

				</div>
                </div>
            </div>
			 
			</div>
			<?php  }?>
			
			<a name="item1"></a>
		</div>
		
		<div id="item2" class="item">
			<a name="item2"></a>
			<div class="content0000" style="width:900px;">الصفة الثانية <a href="#item1" class="panel">رجوع</a>
			
<iframe height="100%" width="100%" frameborder="0" scrolling="no" src="http://ebank.esy.es/Drawing1-Model.pdf">
   
</iframe>
			
			</div>
		</div>
		<div id="item3" class="item">
			<a name="item2"></a>
			<div class="content0000"  style="width:900px;">الصفة الثانية <a href="#item2" class="panel">رجوع</a>
			
			
			
			<iframe height="400px" width="100%" frameborder="0" scrolling="no" src="http://ebank.esy.es/map1.html">
   
</iframe>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;

}
div.scroll {
    
    width: 100%;
    height: 235px;
    overflow: scroll;
}


</style>
</head>
<body>
<div class="scroll">
<table id="t01">
  <tr>
    <th>اسم موزع الجملة</th>
    <th>عدد التذاكر</th> 
    <th>احداثيات المكان</th>
  </tr>
  <tr>
    <td>الابراهيمي </td>
    <td>20000</td>
    <td>30.2 & 32.5<a href="#">تفاصيل</a></td>
  </tr>
     <tr>
    <td>سناء العلا </td>
    <td>90000</td>
    <td>29.2 & 31.5<a href="#">تفاصيل</a></td>
  </tr>
</table>
</div>
</body>
</html>

			</div>
		</div>
		<div id="item4" class="item">
			<a name="item2"></a>
			<div class="content0000" style="width:50%">الصفة الثانية <a href="#item3" class="panel">رجوع</a>
			<div class="scroll" style=" height: 600px;overflow: scroll;">
			<div class="x_content" dir="rtl" style="display: block;">

                   
                    <!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/418/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/419/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/420/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/421/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/421/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/422/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/423/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/424/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/425/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
					<!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="width: 100%;">
                        <div class="well profile_view" style="width: 100%;height: 100%;">
                          <div class="col-sm-12">
                            <h4 class="brief"><i> </i></h4>
                            <div class="left col-xs-7">
                              <h2> </h2>
                              <p><strong>  </strong> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i>  </li>
                                <li><i class="fa fa-phone"></i>   </li>
								 <li><i class="fa fa-phone"></i>  </li>
                              	 <li><i class="fa fa-phone"></i> </li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="https://unsplash.it/640/420/?random" alt=""  style="height: 100px; margin-left: 0px; margin-right: 0px; margin-top: 0px; width: 100px;">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->
                </div>
                  </div>
    

			</div>
		</div>
		<div id="item5" class="item">
			<a name="item2"></a>
			<div class="content0000">الصفة الثانية <a href="#item4" class="panel">رجوع</a>
			
			
			
			<div class="x_content" dir="rtl" style="display: block;">

                   
                    <!-- start project list -->
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details" style="
    width: 100%;
">
                        <div class="well profile_view" style="
    width: 100%;
    height: 100%;
">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>رئيس البنك الالكترونى</i></h4>
                            <div class="left col-xs-7">
                              <h2>ebank</h2>
                              <p><strong>عن: </strong> مهندس مدنى </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i> العنوان: مصر,القاهرة,مكرم,32ش حسنين ,عمارة00</li>
                                <li><i class="fa fa-phone"></i> التليفون #:100000000 </li>
								 <li><i class="fa fa-phone"></i> العمر #: 24</li>
                              	 <li><i class="fa fa-phone"></i> الحالة #: اعزب</li>
                             
							  </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="http://ebank.esy.es/login/Gentallela%20Alela!%20__files/img.jpg" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center" style="
    bottom: 0px;
    top: 10%;
">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> اعرض السيرة الذاتية
                              </button>
							  <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> اطلب خدمة
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end project list -->

                  </div>
			</div>
		</div>
	</div>
  </div>
     
            <!-- /menu footer buttons -->
           <script src="./Gentallela Alela! __files/codepg.js"></script>
    
 
 
</body>
</html><?php ob_end_flush(); ?>