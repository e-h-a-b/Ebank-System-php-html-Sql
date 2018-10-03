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
	<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
   
 		<?php   
		$_GET['id'] = 10;
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
          <!-- /top tiles -->
<div class="row">
             <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_title" dir="rtl">
                    <h>البيانات الخاصة بك</h><ul class="nav navbar-left panel_toolbox">
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
                    </ul><div class="clearfix"></div>
                    
                    
                  </div><div class="x_content" dir="rtl" style="display: block;">

                    <p>هذة البيانات تم تسجلها ولا يمكنك حذفها او تغيرها الا بعد مراجعة طلبك</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
  <th style="width: 15%">               </th><td>
                            <a>البيانات الشخصية</a>
							<a href="http://ebank.esy.es/pm/edit_infos.php">اتجة الى صفحةالتعديلات</a>
                            
                            
                          </td>
                          
						  <th style="width: 1%">التعديـــل</th>
						  
						  
                          
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          
						   <td></td><td>
                            <a>الاســــم</a>
                            <br>
                            <small><?php echo $userRow['userName']; ?></small>
                          </td><td>
                           
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                           
                          </td>
						  
						   
                          
                           <td></td>
						   <td></td>
                          
                         
                        </tr>
                        <tr>
                             <td>-</td>
							
                        <td>
                            <a>العمر </a>
                            <br>
                            <small><?php echo $userRow['userage']; ?></small>
                          </td><td>
                          <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                            </td>
 <td></td>
						   <td></td>
                          

</tr>
                          
                        
                        <tr>
                          <td>-</td>
						  
						   <td>
                            <a>الايمـيل</a>
                            <br>
                            <small><?php echo $userRow['userEmail']; ?></small>
                          </td><td>
                         <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                          
                         
                        </tr>
                        <tr>
                          <td>-</td>
						  
                          <td>
                            <a>الرقم السري </a>
                            <br>
                            <small><?php echo $userRow['userPass']; ?></small>
                          </td><td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                          
                        </tr>
                        <tr>
                          <td>-</td>
						  <td>
                            <a>رقم المحمول</a>
                            <br>
                            <small><?php echo $userRow['mobile']; ?></small>
                          </td><td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                          
                          
                        </tr>
                        <tr>
                          <td>-</td>
						   <td>
                            <a>العنوان</a>
                            <br>
                            <small><?php echo $userRow['adress']; ?></small>
                          </td><td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                         
                         
                        </tr>
                        <tr>
                          <td>-</td>
						  <td>
                            <a>رقم البريد</a>
                            <br>
                            <small><?php echo $userRow['post']; ?></small>
                          </td><td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                          
                          
                        </tr>
                        <tr>
                          <td>-</td>
						  <td>
                            <a>رقم البطاقة الشخصية/جواز السفر</a>
                            <br>
                            <small><?php echo $userRow['perid']; ?></small>
                          </td><td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                          
                          
                        </tr>
                        <tr>
                          <td>-</td>
						  
                          <td>
                            <a>رقم البنك الالكترونى الخاص بك</a>
                            <br>
                            <small><?php echo $userRow['cardnum']; ?></small>
                          </td><td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                          
                        </tr>
						  <tr>
                          <td>-</td>
						  
                          <td>
                            <a>رقم الجهاز الخاص بك</a>
                            <br>
                            <small><?php echo $userRow['cardnum']; ?></small>
                          </td><td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> التعديل </a>
                          </td>
						  <td></td>
						   <td></td>
                          
                          
                        </tr>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
        <!-- /page content -->

        <!-- footer content -->
       
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
	<script  src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>

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
    <script src="./Gentallela Alela! __files/jquery-jvectormap-world-mill-en.js.download"></script>
    <script src="./Gentallela Alela! __files/jquery-jvectormap-us-aea-en.js.download"></script>
    <script src="./Gentallela Alela! __files/gdp-data.js.download"></script>
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
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
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

<div class="jvectormap-tip"></div><div class="daterangepicker dropdown-menu opensleft show-calendar" style="top: 236px; right: 34.0781px; left: auto; display: none;"><div class="calendar first left"><div class="calendar-date"><table class="table-condensed"><thead><tr><th></th><th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month"><select class="monthselect"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9" selected="selected">October</option><option value="10">November</option><option value="11">December</option></select><select class="yearselect"><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option></select></th><th></th></tr><tr><th class="week">W</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="week">40</td><td class="off disabled" data-title="r0c0">26</td><td class="off disabled" data-title="r0c1">27</td><td class="off disabled" data-title="r0c2">28</td><td class="off disabled" data-title="r0c3">29</td><td class="off disabled" data-title="r0c4">30</td><td class="off disabled" data-title="r0c5">1</td><td class="off disabled" data-title="r0c6">2</td></tr><tr><td class="week">41</td><td class="off disabled" data-title="r1c0">3</td><td class="off disabled" data-title="r1c1">4</td><td class="off disabled" data-title="r1c2">5</td><td class="off disabled" data-title="r1c3">6</td><td class="off disabled" data-title="r1c4">7</td><td class="off disabled" data-title="r1c5">8</td><td class="off disabled" data-title="r1c6">9</td></tr><tr><td class="week">42</td><td class="off disabled" data-title="r2c0">10</td><td class="off disabled" data-title="r2c1">11</td><td class="off disabled" data-title="r2c2">12</td><td class="off disabled" data-title="r2c3">13</td><td class="off disabled" data-title="r2c4">14</td><td class="off disabled" data-title="r2c5">15</td><td class="off disabled" data-title="r2c6">16</td></tr><tr><td class="week">43</td><td class="off disabled" data-title="r3c0">17</td><td class="off disabled" data-title="r3c1">18</td><td class="off disabled" data-title="r3c2">19</td><td class="off disabled" data-title="r3c3">20</td><td class="off disabled" data-title="r3c4">21</td><td class="off disabled" data-title="r3c5">22</td><td class="off disabled" data-title="r3c6">23</td></tr><tr><td class="week">44</td><td class="off disabled" data-title="r4c0">24</td><td class="off disabled" data-title="r4c1">25</td><td class="off disabled" data-title="r4c2">26</td><td class="off disabled" data-title="r4c3">27</td><td class="off disabled" data-title="r4c4">28</td><td class="off disabled" data-title="r4c5">29</td><td class="off disabled" data-title="r4c6">30</td></tr><tr><td class="week">45</td><td class="off disabled" data-title="r5c0">31</td><td class="off disabled" data-title="r5c1">1</td><td class="off disabled" data-title="r5c2">2</td><td class="off disabled" data-title="r5c3">3</td><td class="off disabled" data-title="r5c4">4</td><td class="off disabled" data-title="r5c5">5</td><td class="off disabled" data-title="r5c6">6</td></tr></tbody></table></div></div><div class="calendar second right"><div class="calendar-date"><table class="table-condensed"><thead><tr><th></th><th class="prev available"><i class="fa fa-arrow-left icon icon-arrow-left glyphicon glyphicon-arrow-left"></i></th><th colspan="5" class="month"><select class="monthselect"><option value="9">October</option><option value="10" selected="selected">November</option><option value="11">December</option></select><select class="yearselect"></select></th><th></th></tr><tr><th class="week">W</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr></thead><tbody><tr><td class="week">45</td><td class="off disabled" data-title="r0c0">31</td><td class="off disabled" data-title="r0c1">1</td><td class="off disabled" data-title="r0c2">2</td><td class="off disabled" data-title="r0c3">3</td><td class="off disabled" data-title="r0c4">4</td><td class="off disabled" data-title="r0c5">5</td><td class="off disabled" data-title="r0c6">6</td></tr><tr><td class="week">46</td><td class="off disabled" data-title="r1c0">7</td><td class="off disabled" data-title="r1c1">8</td><td class="off disabled" data-title="r1c2">9</td><td class="off disabled" data-title="r1c3">10</td><td class="off disabled" data-title="r1c4">11</td><td class="off disabled" data-title="r1c5">12</td><td class="off disabled" data-title="r1c6">13</td></tr><tr><td class="week">47</td><td class="off disabled" data-title="r2c0">14</td><td class="off disabled" data-title="r2c1">15</td><td class="off disabled" data-title="r2c2">16</td><td class="off disabled" data-title="r2c3">17</td><td class="off disabled" data-title="r2c4">18</td><td class="off disabled" data-title="r2c5">19</td><td class="off disabled" data-title="r2c6">20</td></tr><tr><td class="week">48</td><td class="off disabled" data-title="r3c0">21</td><td class="off disabled" data-title="r3c1">22</td><td class="off disabled" data-title="r3c2">23</td><td class="off disabled" data-title="r3c3">24</td><td class="off disabled" data-title="r3c4">25</td><td class="off disabled" data-title="r3c5">26</td><td class="off disabled" data-title="r3c6">27</td></tr><tr><td class="week">49</td><td class="off disabled" data-title="r4c0">28</td><td class="off disabled" data-title="r4c1">29</td><td class="off disabled" data-title="r4c2">30</td><td class="off disabled" data-title="r4c3">1</td><td class="off disabled" data-title="r4c4">2</td><td class="off disabled" data-title="r4c5">3</td><td class="off disabled" data-title="r4c6">4</td></tr><tr><td class="week">50</td><td class="off disabled" data-title="r5c0">5</td><td class="off disabled" data-title="r5c1">6</td><td class="off disabled" data-title="r5c2">7</td><td class="off disabled" data-title="r5c3">8</td><td class="off disabled" data-title="r5c4">9</td><td class="off disabled" data-title="r5c5">10</td><td class="off disabled" data-title="r5c6">11</td></tr></tbody></table></div></div><div class="ranges"><ul><li class="active">Custom</li></ul><div class="range_inputs"><div class="daterangepicker_start_input"><label for="daterangepicker_start">From</label><input class="input-mini" type="text" name="daterangepicker_start" value=""></div><div class="daterangepicker_end_input"><label for="daterangepicker_end">To</label><input class="input-mini" type="text" name="daterangepicker_end" value=""></div><button class="applyBtn btn btn-default btn-small btn-primary">Submit</button>&nbsp;<button class="cancelBtn btn btn-default btn-small">Clear</button></div></div></div></body>


	
	
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
 
	
	


</html>