<html lang="en" class=" ">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
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
	
	<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
   
 		<?php   
		$_GET['id'] = 2;
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
        <div class="right_col" role="main" style="min-height: 819px;">          <!-- top tiles -->
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
<div class="row">
           
                      <div class="col-md-12">
                <div class="x_panel"  dir="rtl">
                  <div class="x_title">
                    <h2>Invoice Design <small>Sample user invoice design</small></h2>
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

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
						  <small class="pull-right">&#1576;&#1578;&#1575;&#1585;&#1610;&#1582; :11/11/2016</small>
                                          <i class="fa fa-globe"></i> &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1583;&#1601;&#1593;
                                          
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
					  <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>&#1585;&#1602;&#1605; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1583;&#1601;&#1593; 9595#51</b>
                          <br>
                          
                          <b>&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1575;&#1606;&#1578;&#1607;&#1575;&#1569; &#1575;&#1604;&#1589;&#1604;&#1575;&#1581;&#1610;&#1577;</b> 2/22/2014
                          <br>
                          <b>&#1585;&#1602;&#1605; &#1575;&#1604;&#1576;&#1606;&#1603; &#1575;&#1604;&#1582;&#1575;&#1589; &#1576;&#1603;</b> 968-34567
                        </div>
                        <!-- /.col -->
						<div class="col-sm-4 invoice-col">
                          &#1575;&#1604;&#1609;
                          <address>
                                          <strong>&#1605;&#1581;&#1605;&#1608;&#1583; &#1575;&#1581;&#1605;&#1583; &#1575;&#1604;&#1587;&#1610;&#1583;</strong>
                                          <br>&#1581;&#1610; &#1575;&#1604;&#1575;&#1587;&#1576;&#1603;&#1610;&#1577; &#1576;&#1591;&#1606;&#1591;&#1575;
                                          <br>&#1576;&#1606;&#1607;&#1575;,&#1576;&#1585;&#1610;&#1583; &#1585;&#1602;&#1605; 192358
                                          <br>&#1575;&#1604;&#1607;&#1575;&#1578;&#1601;:205666332222
                                          <br>&#1575;&#1604;&#1575;&#1610;&#1605;&#1610;&#1604; :mahm_www@hotmail.com
                                      </address>
                        </div>
                        <div class="col-sm-4 invoice-col">
                          &#1605;&#1606;
                          <address>
                                          <strong>&#1575;&#1578;&#1581;.&#1585;&#1574;&#1610;&#1587; &#1575;&#1604;&#1576;&#1606;&#1603; &#1575;&#1604;&#1575;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1610;</strong>
                                          <br>&#1588;&#1575;&#1585;&#1593; &#1575;&#1581;&#1605;&#1583; &#1610;&#1575;&#1587;&#1610;&#1606; &#1576;&#1575;&#1604;&#1575;&#1605;&#1610;&#1585;&#1610;&#1577;
                                          <br>&#1575;&#1604;&#1602;&#1575;&#1607;&#1585;&#1577;,&#1576;&#1585;&#1610;&#1583;11931
                                          <br>&#1585;&#1602;&#1605; &#1575;&#1604;&#1607;&#1575;&#1578;&#1601;:2050000000
                                          <br>&#1575;&#1604;&#1575;&#1610;&#1605;&#1610;&#1604; :ebank@ebank.esy.es
                                      </address>
                        </div>
                        <!-- /.col -->
                        
                        
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>&#1605;</th>
                                <th>&#1575;&#1604;&#1605;&#1588;&#1585;&#1608;&#1593;</th>
                                <th>&#1603;&#1608;&#1583; &#1575;&#1604;&#1605;&#1588;&#1585;&#1608;&#1593;</th>
                                <th style="width: 59%">&#1578;&#1601;&#1575;&#1589;&#1610;&#1604; &#1575;&#1604;&#1605;&#1588;&#1585;&#1608;&#1593;</th>
                                <th>&#1575;&#1580;&#1605;&#1575;&#1604;&#1609; &#1575;&#1604;&#1575;&#1588;&#1578;&#1585;&#1603;</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>&#1605;&#1588;&#1585;&#1608;&#1593; &#1585;&#1610; &#1575;&#1604;&#1575;&#1585;&#1575;&#1590;&#1610;</td>
                                <td>455-981-221</td>
                                <td>&#1575;&#1581;&#1583; &#1575;&#1604;&#1593;&#1608;&#1575;&#1605;&#1604; &#1575;&#1604;&#1575;&#1587;&#1575;&#1587;&#1610;&#1577; &#1608;&#1575;&#1604;&#1576;&#1606;&#1610;&#1577; &#1575;&#1604;&#1578;&#1581;&#1578;&#1610;&#1577; &#1601;&#1609; &#1575;&#1604;&#1586;&#1585;&#1575;&#1593;&#1577; &#1601;&#1609; &#1603;&#1575;&#1601;&#1577; &#1575;&#1604;&#1593;&#1608;&#1575;&#1605;&#1604; &#1575;&#1604;&#1605;&#1606;&#1575;&#1582;&#1610;&#1577;
                                </td>
                                <td>60 &#1580;&#1606;&#1610;&#1577;</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>&#1605;&#1588;&#1585;&#1608;&#1593; &#1575;&#1587;&#1578;&#1589;&#1604;&#1575;&#1581; &#1575;&#1604;&#1575;&#1585;&#1575;&#1590;&#1610; &#1575;&#1604;&#1586;&#1585;&#1575;&#1593;&#1610;&#1577;</td>
                                <td>247-925-726</td>
                                <td>&#1575;&#1606; &#1575;&#1604;&#1575;&#1587;&#1578;&#1589;&#1604;&#1575;&#1581; &#1575;&#1604;&#1575;&#1585;&#1575;&#1590;&#1610; &#1610;&#1593;&#1583; &#1603;&#1606;&#1586; &#1605;&#1587;&#1578;&#1602;&#1576;&#1604;&#1609; &#1604;&#1604;&#1575;&#1580;&#1610;&#1575;&#1604; &#1575;&#1604;&#1602;&#1575;&#1583;&#1605;&#1577; &#1608;&#1575;&#1604;&#1581;&#1575;&#1590;&#1585;&#1577;</td>
                                <td>50 &#1580;&#1606;&#1610;&#1577;</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>&#1605;&#1588;&#1585;&#1608;&#1593; &#1605;&#1589;&#1575;&#1606;&#1593; &#1607;&#1610;&#1575;&#1603;&#1604; &#1575;&#1604;&#1605;&#1593;&#1583;&#1575;&#1578;</td>
                                <td>735-845-642</td>
                                <td>&#1610;&#1593;&#1583; &#1575;&#1606;&#1588;&#1575;&#1569; &#1605;&#1589;&#1606;&#1593; &#1604;&#1607;&#1610;&#1575;&#1603;&#1604; &#1575;&#1604;&#1605;&#1593;&#1583;&#1575;&#1578; &#1605;&#1606; &#1575;&#1601;&#1590;&#1604; &#1575;&#1604;&#1608;&#1587;&#1575;&#1574;&#1604; &#1604;&#1585;&#1601;&#1593; &#1575;&#1606;&#1578;&#1575;&#1580;&#1610;&#1577; &#1575;&#1604;&#1605;&#1593;&#1583;&#1575;&#1578; &#1608;&#1582;&#1601;&#1590; &#1578;&#1603;&#1604;&#1601;&#1577; &#1588;&#1585;&#1575;&#1574;&#1577; &#1608;&#1575;&#1587;&#1578;&#1582;&#1583;&#1575;&#1605;&#1607;&#1575;</td>
                                <td>30 &#1580;&#1606;&#1610;&#1577;</td>
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                       
                        <div class="col-xs-6">
                          <p class="lead">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1606;&#1578;&#1607;&#1575;&#1569; &#1589;&#1604;&#1575;&#1581;&#1610;&#1577; &#1575;&#1604;&#1583;&#1601;&#1593; 20/12/2014</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
								<td>140 &#1580;&#1606;&#1610;&#1577;</td>
                                  <th style="width:50%">&#1575;&#1604;&#1605;&#1610;&#1604;&#1594; &#1575;&#1604;&#1575;&#1580;&#1605;&#1575;&#1604;&#1609;:</th>
                                  
                                </tr>
                                <tr>
								<td>15 &#1580;&#1606;&#1610;&#1577;</td>
                                  <th>&#1575;&#1604;&#1590;&#1585;&#1575;&#1574;&#1576;</th>
                                  
                                </tr>
                               
                                <tr>
								<td>155 &#1580;&#1606;&#1610;&#1577;</td>
                                  <th>&#1575;&#1604;&#1605;&#1580;&#1605;&#1604;</th>
                                 
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
						 <div class="col-xs-6">
                          <p class="lead">&#1591;&#1585;&#1602; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1583;&#1601;&#1593;:</p>
                          <img src="https://colorlib.com/polygon/gentelella/images/visa.png" alt="Visa">
                          <img src="https://colorlib.com/polygon/gentelella/images/mastercard.png" alt="Mastercard">
                          <img src="https://colorlib.com/polygon/gentelella/images/american-express.png" alt="American Express">
                          <img src="https://colorlib.com/polygon/gentelella/images/paypal2.png" alt="Paypal">
						  
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            &#1603;&#1601;&#1575;&#1577; &#1575;&#1604;&#1608;&#1587;&#1575;&#1574;&#1604; &#1575;&#1604;&#1605;&#1578;&#1575;&#1581;&#1577; &#1604;&#1578;&#1587;&#1607;&#1610;&#1604; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1583;&#1601;&#1593; &#1575;&#1604;&#1605;&#1576;&#1575;&#1588;&#1585;&#1577; 
                          </p>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> &#1591;&#1576;&#1575;&#1593;&#1577;</button>
                          <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> &#1575;&#1578;&#1605;&#1605; &#1593;&#1605;&#1604;&#1610;&#1577; &#1575;&#1604;&#1583;&#1601;&#1593;</button>
                          
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
        <!-- /page content -->

         
      </div>
    </div>
 <!-- jQuery -->
    </div>
    </div>

     <!-- jQuery -->
    <script src="https://colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="https://colorlib.com/polygon/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="https://colorlib.com/polygon/vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
    <script src="https://colorlib.com/polygon/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="https://colorlib.com/polygon/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/jszip/dist/jszip.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="https://colorlib.com/polygon/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="https://colorlib.com/polygon/build/js/custom.min.js"></script>
 

  


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
</body>
<?php
			include('menu.php');
		?>

</html>