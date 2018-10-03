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
	$res=mysql_query("SELECT * FROM users WHERE userId='".$_SESSION['user']."'") or die(mysql_error());
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
<head>
    
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>البنك الالكترونى المصري|e-ebank </title>

    <!-- Bootstrap -->
    <link href="./Gentallela Alela! __files/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://colorlib.com/polygon/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./Gentallela Alela! __files/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="https://colorlib.com/polygon/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="https://colorlib.com/polygon/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
		$_GET['id'] = 15;
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
			
			<iframe height="400px" width="100%" frameborder="0" scrolling="no" src="http://ebank.esy.es/map.html">
   <div height="100%" width="100%" frameborder="0" scrolling="no" >
    <html>
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 400pX;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  </head>

  <body>
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(30.5, 31),
          zoom: 8
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
        //downloadUrl('http://localhost/dashboard/mapmarkers2.xml', function(data) {
		  downloadUrl('http://ebank.esy.es/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_2ubXPtaZCXzPvQbiR0rj40DjE28sH3o&callback=initMap">
    </script>

</iframe>
			<div class="col-md-12 col-sm-12 col-xs-12" dir="rtl">
                <div class="x_panel">
                  <div class="x_title">
                    <h dir="rtl">&#1593;&#1585;&#1590; &#1575;&#1604;&#1605;&#1589;&#1606;&#1593; &#1575;&#1604;&#1582;&#1575;&#1589; &#1576;&#1603; <small>&#1605;&#1591;&#1604;&#1576;&#1575;&#1578; &#1608;&#1575;&#1580;&#1576;&#1577;</small></h>
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
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="dt-buttons btn-group">
</div>
<div id="datatable-buttons_filter" class="dataTables_filter">

</div>
<table id="datatable-buttons" class="table table-striped jambo_table bulk_action" role="grid" aria-describedby="datatable-buttons_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending">م</th>
						<th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 110px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">كود المصنع</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 152px;" aria-label="Position: activate to sort column ascending">مالك المصنع</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 120px;" aria-label="Office: activate to sort column ascending">مكان المصنع</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">المنطقة</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 115px;" aria-label="Start date: activate to sort column ascending">تاريخ التقديم</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending">التكلفة</th>
						</tr>
                      </thead>


                      <tbody>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                      
	
	
	
       
        


 
                        
                        
                         <?php 
$infa=mysql_query('SELECT * from `indxfac`');
  while($getin=mysql_fetch_array($infa))
  {
        $crd=$getin['Cardnum'];
	$pass=$getin['pass'];
	$sta=$getin['staus'];
	$pla=$getin['place'];
	$tim=$getin['time'];
	$cod=$getin['code'];
	$cos=$getin['cost'];
	$kin=$getin['kind'];  
	$nmm=$nmm+1;
  ?>
  <tr role="row" class="odd">
                          <td><?php echo $nmm; ?></td>
						  <td tabindex="0" class="sorting_1"><?php echo $getin['Cardnum']; ?></td>
                          <td><?php echo $getin['pass']; ?></td>
                          <td><?php echo $getin['staus']; ?></td>
                          <td><?php echo $getin['place']; ?></td>
                          <td><?php echo $getin['time']; ?></td>
                          <td><?php echo $getin['code']; ?></td>
                        </tr>
  <?php } ?>
               
                        
                        
                        
                        
                        
                      <thead>
                        <tr role="row">
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending"><?php echo $nmm; ?></th>
						<th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 110px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">كود المصنع</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 152px;" aria-label="Position: activate to sort column ascending">مالك المصنع</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 120px;" aria-label="Office: activate to sort column ascending">مكان المصنع</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">المنطقة</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 115px;" aria-label="Start date: activate to sort column ascending">تاريخ التقديم</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending">التكلفة</th>
						</tr>
                      </thead>  
                        
                        
                        </tbody>
                        
                        
                        
                        
                      
                      
                       




                    </table>
<div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">
</div>
<div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
<ul class="pagination">
<li class="paginate_button previous disabled" id="datatable-buttons_previous">

</li>
<li class="paginate_button active">
</li><li class="paginate_button ">
</li><li class="paginate_button ">
</li><li class="paginate_button ">
</li><li class="paginate_button ">
</li><li class="paginate_button ">
</li><li class="paginate_button next" id="datatable-buttons_next">
</li>
</ul>
</div>
</div>
                  </div>
				   <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate="">
 
                      <span class="section">&#1571;&#1583;&#1582;&#1604; &#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1575;&#1604;&#1605;&#1589;&#1606;&#1593; &#1575;&#1604;&#1582;&#1575;&#1589; &#1576;&#1603;</span>

                      

                     
                     
                      
                      <div class="item form-group">
                        
                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" required="required" placeholder="المكان">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" required="required" placeholder="سعر الايجار/بيع">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
					  
					  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" required="required" placeholder="الحالة">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" required="required" placeholder="سبب المشركة">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
					  
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3" required="required" placeholder="الاحداثي فى خطوط عرض">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
					  
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" required="required" placeholder="الاحداثي فى خطوط الطول">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                     

                      
                     
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="send" type="submit" class="btn btn-success">&#1575;&#1578;&#1605;&#1605; &#1593;&#1605;&#1604;&#1610;&#1577;  &#1575;&#1583;&#1582;&#1575;&#1604; &#1575;&#1604;&#1605;&#1589;&#1606;&#1593;</button>
						  <button type="submit" class="btn btn-primary"> الغاء العملية</button>
						     <button onclick="window.location.href='http://www.ebank.esy.es/gt.php'"  ><a href="http://www.ebank.esy.es/gt.php"> قم بتحديد الموقع</a></button>
                       
						 
                        </div>
                      </div>
					  <div class="ln_solid"></div>
                    </form>
                  </div>
				  
			</div>	  
                </div>
              </div>
          </div>
          <!-- /top tiles -->

		  
		  
		  
		  
		  
		  
        <!--        
       <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
         /footer content -->
      </div>
    </div>

	
	
  <?php
			include('menu.php');
		?>
    <!-- jQuery -->
    <script src="https://colorlib.com/polygon/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://colorlib.com/polygon/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="https://colorlib.com/polygon/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="https://colorlib.com/polygon/vendors/nprogress/nprogress.js"></script>
    <!-- Datatables -->
   <!-- <script src="https://colorlib.com/polygon/vendors/datatables.net/js/jquery.dataTables.min.js"></script>-->
    <script src="./Gentallela Alela! __files/jsdatabase.js"></script>
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
	
    <script src="./Gentallela Alela! __files/custom.min.js"></script>
	<script  src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>

	
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

      });
    </script>

    <!-- /Datatables -->
  
</body>

	
	
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