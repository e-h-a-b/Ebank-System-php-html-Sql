<?php

 $sql = "UPDATE visitoer SET Balance=Balance-".$text." WHERE userId='1'";

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

?>
<html class=" "><head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="keywords" content=" البنك الالكترونى المصري,مشروعات ,وظائف واعمال ,Ebank,البنك,البنك الاهلى ,البنك الالكترونى,اخبار البنك,حجز اسهم,مساهمات,اخبار مصر,اخبار مصرية,اخبار الرياضة,اخبار الفن,اخبار الحوادث,اخبار الصحة,مراة ومنوعات,حظك اليوم,اخبار الاقتصاد" />
   
	<meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
	<meta name="theme-color" content="#e62117">
	<meta name="format-detection" content="telephone=no">
	
<link rel="alternate"  hreflang="ar-eg" /> 
<meta name="robots" content="INDEX, FOLLOW"/>
<meta name="bingbot-mobile" content="noindex, follow"/>
<meta name="author" content="" />
<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
<meta name="language" content="ar-EG">
<meta name="robots" content="all" />
<meta name="content-language" content="eg"/>
<meta http-equiv="X-Frame-Options" content="deny">
<meta http-equiv="imagetoolbar" content="no"/>
<meta property="article:publisher" content="https://www.facebook.com/ebank.esy.es/"/>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Set-Cookie" content="ACCOUNT=9983373;path=/; expires=Thursday, 20-May-09 00:15:00 GMT">
<meta name="description" content="البنك الاجتماعى التعاونى لهبط وخفض السلع والمنتاجات  واجاد المزيد من الوظائف والاعمال حتى لا يحتكر الدولار اسعار المنتاجات الاساسية" />

	<link rel="canonical" href="" />
    <meta property="og:locale" content="ar_AR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ُُالبنك الالكترونى المصري" />
    <meta property="og:description" content="البنك الاجتماعى التعاونى لهبط وخفض السلع والمنتاجات  واجاد المزيد من الوظائف والاعمال حتى لا يحتكر الدولار اسعار المنتاجات الاساسية" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="البنك الالكتروني المصري" />
    <meta property="fb:app_id" content="292132547887634" />
    <meta property="og:image" content="tickets.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="البنك الاجتماعى التعاونى لهبط وخفض السلع والمنتاجات  واجاد المزيد من الوظائف والاعمال حتى لا يحتكر الدولار اسعار المنتاجات الاساسية" />
    <meta name="twitter:title" content="البنك الالكتروني المصري" />
    <meta name="twitter:image" content="tickets.png" />

     <title >E-Ebank | البنك الالكترونى المصري</title> 
<!-- <link rel="alternate" href="ebank.esy.es" hreflang="eg-eg" /> -->

<!-- Bootstrap -->
    <link href="login/Gentallela Alela! __files/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="login/Gentallela Alela! __files/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="login/Gentallela Alela! __files/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="login/Gentallela Alela! __files/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="login/Gentallela Alela! __files/jquery-jvectormap-2.0.3.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="login/Gentallela Alela! __files/custom.min.css" rel="stylesheet">


        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.2/css/font-awesome.min.css">
        <link rel="stylesheet" href="panel-slider-master/demo.css">
			<script>
	(function() {
    var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
    link.type = 'image/x-icon';
    link.rel = 'shortcut icon';
    link.href = 'login/m.ico';
    document.getElementsByTagName('head')[0].appendChild(link);
}());
	</script>
  </head>
<body style="background-image: linear-gradient(rgba(255,255,255,.05) 2px, transparent 2px), linear-gradient(90deg, rgba(255,255,255,.04) 2px, transparent 2px), linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(0deg, rgba(0,0,0,.3) 0, transparent 100px);background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px, 100% 100%;"><p align="center">
<audio id="audioplayer" > <!-- Remove the "Controls" Attrebute if you dont want the visual controls -->
</audio>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 40%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 65px;
    background-color: rgba(32, 45, 58, 0.85);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
	background-color: rgba(37, 136, 131, 0.35);
}

.sidenav .closebtn {
    position: absolute; 
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<!-- -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="
    margin-left: 0px;
    padding-left: 8px;
    padding-bottom: 0px;
    padding-top: 0px;
    margin-top: 10px;
">×</a>
  <a href="login/profile.php">مباشرة الاعمال</a>
  <a href="login/register.php">عضو جديد</a>
 
</div>


<script>
function openNav() {
 
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>






<!--<style>
a:hover {
    background-color: rgba(37, 136, 131, 0.35);
}
</style>-->


<div id="pageFooter" style="top: 0px;background-color: rgba(13, 21, 25, 0.52);float: left;height: 94%;width: 65px;position: fixed;display: block;">
<span style="font-size:30px;cursor:pointer;padding-left: 15px;" onclick="openNav()"> ☰ </span>
 <a href="https://www.facebook.com/%D8%A7%D9%84%D8%A8%D9%86%D9%83-%D8%A7%D9%84%D8%A7%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%89-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A-319963795063101/" id="hh1" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'http://icons.iconarchive.com/icons/arrioch/whack/128/Whack-Google-Earth-icon.png']);" rel="nofollow" style="display:block;position:fixed;top: 80px;width:40px;height:45px;left: 5px;" target="_blank" title="البنك الالكتروني المصري" class="animated zoomin">
  <img alt="Ebank" src="https://2.bp.blogspot.com/-StTsbJn3gjg/WWqJVCBJLRI/AAAAAAAAAXI/I-lIJUp4u5UbtCFjnTiB8MB4UpHVFLvpwCLcBGAs/s320/fb.png" style="
    height: 50px;width: 50px;">
</a><a href="login/rec.php" id="hh2" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'tickets.png']);" rel="nofollow" style="display:block;position:fixed;top: 150px;right:0;width:40px;height:45px;left: 6px;" target="_blank" title="احجز تذكرتك من الان" class="animated fadein">
  <img alt="Ebank" src="https://1.bp.blogspot.com/-0UB29RVUuaw/WWqJTryNQ2I/AAAAAAAAAXE/KuRx_l7iZjYLrvKO-9zsmbP1yum4zm9wwCLcBGAs/s320/tickets.png" style="
    height: 50px;
    width: 50px;
">
</a><a href="News.html" id="hh3" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'tickets.png']);" rel="nofollow" style="display:block;position:fixed;top: 300px;right:0;width:40px;height:45px;left: 6px;" target="_blank" title="اخبار البنك الالكترونى" class="animated zoomin">
  <img alt="Ebank" src="https://4.bp.blogspot.com/-iVBWidZEFkE/WWqJROsmvTI/AAAAAAAAAXA/ujShtyoY8GQx3X_ChNzigEav9p7JNvAPQCLcBGAs/s320/newspaper-400x276.png" style="
    height: 50px;
    width: 50px;
">
</a>
<a href="city.html" id="hh5" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'http://icons.iconarchive.com/icons/arrioch/whack/128/Whack-Google-Earth-icon.png']);" rel="nofollow" style="display:block;position:fixed;top: 230px;width: 30px;left: 6px;height:45px;" target="_blank" title="مشروع المدينة التجربية للبنك" class="animated zoomin">
  <img alt="Ebank" src="https://3.bp.blogspot.com/-7FJiBGLXsnM/WWqI91HANhI/AAAAAAAAAWs/HAKf2a9klxwWBtK69TcjAKBTekVXjiikwCLcBGAs/s320/engineering.png" style="
    height: 50px;
    width: 56px;
    ">
</a>
<a href="http://ebank.esy.es/coin.html" id="hh2" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'tickets.png']);" rel="nofollow" style="display:block;position:fixed;top: 20%;right: 10%;width: 60px;height: 60px;left: 92%;bottom: 0px;" target="_blank" 
title="Ecoin سعر العملة الالكترونية 30 قرشا" class="animated fadein">
  <img alt="Ebank" src="https://4.bp.blogspot.com/-ZBOB9qClqGI/WWqDmBkyofI/AAAAAAAAAWE/QUxAoSM2ZigKD9j24QvpsgYEI0iu80AVwCLcBGAs/s1600/Rectangle%2B2.png" style="
    height: 90px;
    width: 90px;
">
</a>
<a href="Page/h.php" id="hh4" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'tickets.png']);" rel="nofollow" style="display:block;position:fixed;top: 450px;right:0;width:40px;height:45px;left: 6px;" target="_blank" title="ادعم الموقع بتعديل واكتشاف الاخطاء ادعم الموقع بخطوط برمجة وابداء الاراء" class="animated fadein">
  <img alt="Ebank" src="https://4.bp.blogspot.com/-r5O79iU-VAE/WWqJQ-DsqGI/AAAAAAAAAW8/38QjQe8W7e0oGwa8baA-NrYaNiRKwy1cgCLcBGAs/s320/hm.png" style="
    height: 50px;
    width: 50px;
">
</a><a href="chat.html" id="hh4" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'http://icons.iconarchive.com/icons/webiconset/application/128/Chat-icon.png']);" rel="nofollow" style="display:block;position:fixed;top: 510px;right: 0px;width:40px;height:45px;left: 6px;" target="_blank" title="قم بتحميل برنامج المحادثات الخاص بالموقع" class="animated fadein">
  <img alt="Ebank" src="http://icons.iconarchive.com/icons/webiconset/application/128/Chat-icon.png" style="
    height: 50px;
    width: 50px;
">
</a><a href="chatbot-master/demo/demo-ddg.html" id="hh4" onclick="_gaq.push(['_trackEvent', 'thmmtto', 'Click', 'http://icons.iconarchive.com/icons/noctuline/wall-e/128/Wall-E-icon.png']);" rel="nofollow" style="display:block;position:fixed;top: 370px;right: 100px;width:40px;height:45px;left: 0px;" target="_blank" title="قم بتحميل برنامج المحادثات الخاص بالموقع" class="animated fadein">
  <img alt="Ebank" src="http://icons.iconarchive.com/icons/noctuline/wall-e/128/Wall-E-icon.png" style="
    height: 65px;
    width: 65px;
    /* right: 100px; */
">
</a></div>
<!--<script>
var audio = new Audio("start.mp3");

audio.oncanplaythrough = function(){
audio.play();
}

audio.onended = function(){

audio.play();
}

</script>-->
<!--<audio autoplay="true">
			<source src="start.mp3" type="audio/mpeg">
			
		</audio>-->
 
 <?php function get_server_cpu_usage(){
    $load = sys_getloadavg();
    return $load[0];
}  ?> 
 
</p><div style="margin-left: 60px;margin-right: 60px;"><h1 align="center" id="marsh">E-Ebank  | البنك الالكتروني المصري <!--ا--> <br><small> <?php  echo  'Ebank CPU:'.get_server_cpu_usage().'%' ;echo '   .  ' ; echo ip_info("Visitor", "Country");echo " , " ; echo ip_info("Visitor", "City");?></small> </h1></div><a href="login/profile.php">
		</a>

		<style>
/*Horizontal Orientation CSS*/

.jscarousal-horizontal

{

	width: 740px;

	height: 118px;

	background-color: #121212;

	border: solid 1px #7A7677;

	margin: 0;

	padding: 0;

	padding: 22px 8px 22px 8px;

	position: relative; /*overflow: hidden;*/

}

.jscarousal-horizontal-back, .jscarousal-horizontal-forward

{

	float: left;

	width: 23px;

	height: 98px;

	background-color: #121212;

	color: White;

	position: relative;

	top: 6px;

	cursor: pointer;

}

.jscarousal-horizontal-back

{

	background-image: url(left_arrow.jpg);

	background-repeat: no-repeat;

	background-position: left;

}

.jscarousal-horizontal-forward

{

	background-image: url(right_arrow.jpg);

	background-repeat: no-repeat;

	background-position: right;

}

.jscarousal-contents-horizontal

{

	width: 690px;

	height: 124px;

	float: left;

	position: relative;

	overflow: hidden;

}

.jscarousal-contents-horizontal > div

{

	position: absolute;

	width: 100%;

	height: 124px;

}

.jscarousal-contents-horizontal > div > div

{

	float: left;

	margin-left: 8px;

	margin-right: 8px;

}

.jscarousal-contents-horizontal img

{

	width: 120px;

	height: 94px;

	border: solid 1px rgba(21, 102, 203, 0.36);

}

/*Horizontal Orientation CSS Ends*/



/*Vertical Orientation CSS Starts*/

.jscarousal-vertical

{

	width: 140px;

	
    height: 202px;

	background-color: rgba(255, 255, 255, 0.05);

	border: solid 1px rgba(38, 58, 201, 0.21);

	margin: 0;

	padding: 0;

	position: relative;

	overflow: hidden;

}

.jscarousal-vertical-back, .jscarousal-vertical-forward

{

	width: 100%;

	height: 30px;

	background-color: rgba(193, 188, 179, 0.3);

	color: White;

	position: relative;

	cursor: pointer;

	z-index:100;

}

.jscarousal-vertical-back

{

	background-image: url(top_arrow.jpg);

	background-repeat: no-repeat;

	background-position: bottom;
    

}

.jscarousal-vertical-forward

{

	background-image: url(bottom_arrow.jpg);

	background-repeat: no-repeat;

	background-position: top;
	
    


}

.jscarousal-contents-vertical

{

	overflow: hidden;

	width: 140px;

	height: 140px;

}

.jscarousal-contents-vertical > div

{

	position: absolute;

	top: 40px;

	width: 100%;

	height: 820px;

	overflow: hidden;

}

.jscarousal-contents-vertical > div > div

{

	width: 140px;

	height: 125px;

	margin: 8px;

	margin-left: 14px;

}

.jscarousal-contents-vertical > div > div span

{

	display: block;

	width: 70%;

	text-align: center;

}

.jscarousal-contents-vertical img

{

	width: 110px;

	height: 80px;

	border: solid 1px #7A7677;

}

/*Vertical Orientation CSS Ends*/



/*Common*/

.hidden

{

	display: none;

}

.visible

{

	display: block;

}

.thumbnail-active

{

	filter: alpha(opacity=100);

	opacity: 1.0;

	cursor: pointer;

}

.thumbnail-inactive

{

	filter: alpha(opacity=20);

	opacity: 0.2;

	cursor: pointer;

}

.thumbnail-text

{

	color: #7A7677;

	font-weight: bold;

	text-align: left;

	display: block;

	padding: 10px 2px 2px 0px;

}


</style>


<ul class="slider" style="position: relative; overflow: hidden;" id="dell">
            <li class="con-red" style="position: absolute; width: 594px; left: 0px;">
                <div class="tab"><i class="icon-beaker"></i></div>
                <div class="content" style="top: 122px; opacity: 0;">
                    <h2  align="center">الدراسات بالبنك الالكتروني</h2>
                    <ul class="col" style="list-style: none;">
                        <li dir="rtl">الاكتفاء الذاتى داخل البنك </li>
                        <li dir="rtl">مشاركات الاعضاء كالارضي-المصانع</li>
                        <li dir="rtl"> خطط الاعضاء الغير تقليدية</li>
                    </ul>
                    <ul style="list-style: none;">
                        <li dir="rtl">دمج المشركات بالخطط</li>
                        <li dir="rtl">عرض كل عضو الخطاء بالخطة</li>
                        <li dir="rtl">اعتماد الخطة وتنفيذها</li>
                    </ul>
                </div>
            </li>
            <li class="con-green" style="position: absolute; width: 594px; left: 122px;">
                <div class="tab"><i class="icon-bar-chart"></i></div>
                <div class="content" style="top: 122px; opacity: 0;background: rgba(255, 255, 255, 0.02);">
                    <h2 align="center">الاقتصاد</h2>
                    <ul class="col" style="list-style: none;">
                        <li dir="rtl">خفض الاسعار</li>
                        <li dir="rtl">توفير وظائف مريحة</li>
                        <li dir="rtl">منتج نقي وأمن</li>
                    </ul>
                    <ul style="list-style: none;">
                        <li dir="rtl">ربح بالمشاركة بعمل او مال او مادة</li>
                        <li dir="rtl">تبادل الثقافات الاقتصادية</li>
                        <li dir="rtl">التعاون الحضاري النقدي</li>
                    </ul>
                </div>
            </li>
            <li class="con-blue" style="position: absolute; width: 594px; left: 716px;">
                <div class="tab"><i class="icon-book"></i></div>
                <div class="content" style="top: 0px; opacity: 1;">
                    <h2  align="center">الثقافة والمعرفة</h2>
                    <ul class="col" style="list-style: none;">
                        <li dir="rtl">تعلم مهارات الوظيفة</li>
                        <li dir="rtl">تعلم الاقتصاد وتبادل المنفعة</li>
                        <li dir="rtl">كسب المال بطرق مشروعة</li>
                    </ul>
                    <ul style="list-style: none;">
                        <li dir="rtl">ثقل معلوماتك العلمية</li>
                        <li dir="rtl">تحريك المال الذى تملكة</li>
                       
                    </ul>
                </div>
            </li>
            <li class="con-gold" style="position: absolute; width: 594px; left: 838px;">
                <div class="tab"><i class="icon-briefcase"></i></div>
                <div class="content" style="top: 122px; opacity: 0;">
                    <h2  align="center">التعاون البناء</h2>
                    <ul class="col" style="list-style: none;">
                        <li dir="rtl">التعاون والعمل فى آن واحد</li>
                        <li dir="rtl">العمل الجاد والبناء</li>
                        <li dir="rtl">التعاون فى المال والجهد</li>
                    </ul>
                    <ul style="list-style: none;">
                        <li dir="rtl">التعاون فى تحريك الاقتصاد الراكد</li>
                        <li dir="rtl">التعاون فى كافة المجالات</li>
                        <li dir="rtl">التعاون فى حل الازمات</li>
                    </ul>
                </div>
            </li>
        </ul><p align="center"><br>
<br>

<script>
    var lastSong = null;
    var selection = null;
    var playlist = ["https://d1490khl9dq1ow.cloudfront.net/music/mp3preview/light-high-classical-piano-music-theme_Mk6zjNVO.mp3",
	"http://douniamp3.org/music/test2/موسيقى%20هادئة/موسيقى-بيانو/Unchained-Melody.mp3",
	"http://douniamp3.org/music/test2/موسيقى%20هادئة/موسيقى-بيانو/Evergreen.mp3",
	"http://douniamp3.org/music/test2/%D9%85%D9%88%D8%B3%D9%8A%D9%82%D9%89%20%D9%87%D8%A7%D8%AF%D8%A6%D8%A9/%D9%85%D9%88%D8%B3%D9%8A%D9%82%D9%89-%D8%A8%D9%8A%D8%A7%D9%86%D9%88/Wind-Beneath-My-Wings.mp3"
	]; // List of Songs
    var player = document.getElementById("audioplayer"); // Get Audio Element
    player.autoplay=true;
    player.addEventListener("ended", selectRandom); // Run function when song ends

    function selectRandom(){
        while(selection == lastSong){ // Repeat until different song is selected
            selection = Math.floor(Math.random() * playlist.length);
        }
        lastSong = selection; // Remember last song
        player.src = playlist[selection]; // Tell HTML the location of the new Song

    }

    selectRandom(); // Select initial song
    player.play(); // Start Song
</script>
 
                  </p>

        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="panel-slider-master/slider.js"></script>
        <script>
            $('.slider').panelSlider({
                initialPanel: 0,
                delay: 6000
            });
        </script>
   <?php
    
   
   ?>

<div align="center" >
  <div class="col-md-4 col-sm-4 col-xs-12" id="pro1" style="
    left: 14%;
">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title" dir="rtl">
                  <h>1 بيان بتنفيذ المشروعات</h>
                  
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
                  </ul><div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-6" style="
    top: 20px;
">
 <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project1.php"> مشروع ري الاراضي تكلفة نصف مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project2.php">مشروع استصلاح اراضي تكلفة 15 مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow1['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project3.php">مشروع تحلية المياة 1 مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow2['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project4.php">مشروع الالات الزراعية 20 مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow3['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                   
                  </div></div>
                
              </div>
            </div>
<div class="col-md-4 col-sm-4 col-xs-12" id="pro" style="
    left: 20%;
">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title" dir="rtl">
                  <h>2 بيان بتنفيذ المشروعات</h>
                  
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
                  </ul><div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-6" style="
    top: 20px;
">
                   
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project5.php"> مشروع الدواجن تكلفة نصف مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow4['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project6.php">مشروع الماشية  تكلفة 15 مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow5['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project7.php">مشروع الابقار 1 مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow6['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p><a href="http://www.ebank.esy.es/login/project8.php">مشروع الاسماك 20 مليون</a></p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="1" aria-valuenow="0" style="width:<?=$uRow7['precentage'];?>%;"></div>
                        </div>
                      </div>
                    </div>
                  </div>
				   
				   
				   
				   </div>
                
              </div>
            </div>
  </div>

<meta id="metaKeyword" name="keywords" content="Masrawy, Egypt, Portal, Egyptian, News, Breaking, Politics, Economy, Sports, Football, Entertainment, Arts, Cinema, Technology, Science, Cars, Reports, Interviews, Files, Features, Videos, Pictures, Music, Stars, Women, Islam, Jokes, Weather, Stock, Business, demonstrations, Protests, Revolutions, 25 January, 30 June, Elections, Caricature, Press, Translation, Egyptians, Middle East, Europe, Africa, UN, USA, EU, مصراوي, بوابة, أخبار, أخبار عاجلة, مصر, الشرق الأوسط, أفريقيا, العالم, سياسة, اقتصاد, رياضة, منوعات, فنون, تكنولوجيا, علوم, سيارات, هي وهو, رسائل إخبارية, كاريكاتير, إعلانات مبوبة, صحافة, إسلاميات, تقارير وحوارات, ملفات, ألبومات صور, أغاني, سينما, أفلام, موسيقى, كرة قدم, كرة يد, كرة سلة, ألعاب قوى, فيديوهات, كارتون, ترفيه, إسلاميات, مواقيت الصلاة, أسعار العملات, البورصة, جامعات, تعليم, حوادث وقضايا, شرطة, محاكم, مظاهرات, احتجاجات, ثورة, 25 يناير, 30 يونيو, أوروبا, أفريقيا, أسيا, أمريكا"/>
    <link href="http://ebank.esy.es/support/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://ebank.esy.es/support/script.js"></script>
  <style type="text/css">:root #ad-container
{display:none !important;}</style></head>
  <body style="">
  <?php
  require_once 'dbconnect.php';
 $qlll =mysql_query("SELECT * FROM support ");
       $rpp = mysql_fetch_array($qlll);
	   
$result = mysql_query("SELECT id FROM supportcustom");
$rows = mysql_num_rows($result);
 $new=$rows+1;
 $mess="Hello, Can I help you !!! ";
 		mysql_query("INSERT INTO `supportcustom` (`me`, `id`) VALUES ('0', '$new')");
        mysql_query("INSERT INTO `support` (`id`, `message`, `time`, `you`, `me`) VALUES ('0', '$mess', '00:00', '$new', '0')");
 //On page 1
$_SESSION['new'] = $new;


 ?>
  
 
<script type="text/javascript">
    $(document).ready(function(){
      refreshTable();
    });
 
    function refreshTable(){
        $('#tableHolder').load('support/refresh.php', function(){
           setTimeout(refreshTable, 1000);
        });
    }
	
</script>
 
<div class="msg_box" style="right: 10px;display: block;">
	<div class="msg_head" >Ask Site Builder</div>
	<div class="msg_wrap" style="display: none;">
		<div class="msg_body" id="tableHolder">
 					
			<div class="msg_push"></div>
		</div>
	<div class="msg_footer">
	<form method="post" action="http://ebank.esy.es/support/add.php" autocomplete="off">

	<textarea class="msg_input" rows="4" id="idpers" name="idpers"  value="<?php if(isset($_POST['idpers'])){echo htmlentities($_POST['idpers'], ENT_QUOTES, 'UTF-8');} ?>"></textarea></div>
</form>
	</div>
</div>
    
    <!-- desktop footer -->
    <div id="pageFooter" style="background-color: rgba(245, 245, 245, 0.06);float: left;height: 34px;width: 100%;display: block;/* top: 100%; */margin-bottom: 0px;margin-top: 35px;"> 
    
      <div class="divcopyright">
         <p class="pcopyrighttext" style="
    margin-top: 10px;
">
           <a href="http://ebank.esy.es/contact-us.html"> .     الاتصال      </a>
           <a href="http://ebank.esy.es/jobs.html"> .     الوظائف     </a>
           <a href="http://ebank.esy.es/inside.htm"> .     استعلامات    </a>
           <a href="http://ebank.esy.es/about.html"> .     من نحن       </a>
            © EBank 2018. All rights reserved.
          </p>
      </div>
    </div>
 
</div>
<script>
$('#dell').addClass('animated fadeInDown');
$('#marsh').addClass('animated fadeInDown');
$('#hh1').addClass('animated zoomin');
$('#hh2').addClass('animated fadein');
$('#hh3').addClass('animated zoomin');
$('#hh4').addClass('animated fadein');
$('#hh5').addClass('animated zoomin');
$('#contents').addClass('animated fadein');
$('#pro1').addClass('animated flipinx');
$('#pro').addClass('animated flipinx');
$('#btn').addClass('animated rotateindownleft');
$('#btn1').addClass('animated rotateindownright');
</script>
   <!-- jQuery -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/nprogress.js"></script>
    <!-- Datatables -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jquery.dataTables.min.js"></script>
    <script src="login/Gentallela Alela! __files/bootstrap.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/dataTables.buttons.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/buttons.bootstrap.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/buttons.flash.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/buttons.html5.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/buttons.print.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/dataTables.fixedHeader.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/dataTables.keyTable.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/dataTables.responsive.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/responsive.bootstrap.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/datatables.scroller.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/jszip.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/pdfmake.min.js"></script>
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="http://ebank.esy.es/login/Gentallela Alela! __files/custom.min.js"></script>
	
<meta name="keywords" content="شات اكشن,دردشة اكشن,شات اكشن,الشات اكشن,شات اكشن,دردشة اكشن - chat action">
 
    <!-- jVectorMap -->
    <script src="./Gentallela Alela! __files/jquery-jvectormap-world-mill-en.js"></script>
    <script src="./Gentallela Alela! __files/jquery-jvectormap-us-aea-en.js"></script>
    <script src="./Gentallela Alela! __files/gdp-data.js"></script>
 






	</body></html>