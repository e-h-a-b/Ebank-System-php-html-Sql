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
	<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style.css">
	<link rel="stylesheet" href="style1.css" type="text/css">
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

  </head>

  <body class="nav-sm">
   
 		<?php   
		$_GET['id'] = 36;
       include('visitor.php');
	   ?> 
 
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
		  
		  
		  
		  
			<div class="col-md-12 col-sm-12 col-xs-12" dir="rtl">
                <div class="x_panel">
                  <div class="x_title">
                    <h dir="rtl" >  عمليات التحويل الى عضو اخر<small>سجل عمليات التحويل</small></h>
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
                     
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="dt-buttons btn-group">
</div>
<div id="datatable-buttons_filter" class="dataTables_filter">

</div>
<table id="datatable-buttons" class="table table-striped jambo_table bulk_action" role="grid" aria-describedby="datatable-buttons_info" >
                      <thead>
                        <tr role="row" dir="rtl">
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">م</th>
						<th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">التاريخ</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Position: activate to sort column ascending">المبلغ قبل التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">المبلغ بعد التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 150px;" aria-label="Age: activate to sort column ascending">كود التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 115px;" aria-label="Start date: activate to sort column ascending">ما تم تحويلة</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending">بطاقة المحول له</th></tr>
                      </thead>


                      <tbody>
                        
                        
                         <?php 
						 $ema=$userRow['userId'];
$rf=mysql_query('SELECT * from seremon WHERE id1="'.$ema.'" or id2="'.$ema.'"');
while($getin=mysql_fetch_array($rf)){
	
	if ($getin['fromid']==$ema){
	 
	$dat=$getin['datetime'];
	$ber=$getin['beforeid'];
	$aft=$getin['after'];
	$cod=$getin['codeconv'];
	$mon=$getin['money'];
	$crd=$getin['cardrecive'];
        	   $nmm=$nmm+1;
  ?>
  <tr role="row" class="odd">
                          <td><?php echo $nmm; ?></td>
                          <td tabindex="0" class="sorting_1"><?php echo $getin['datetime']; ?></td>
                          <td><?php echo $getin['beforeid']; ?></td>
                          <td><?php echo $getin['afterid']; ?></td>
                          <td><?php echo $getin['codeconv']; ?></td>
                          <td><?php echo $getin['money']; ?></td>
					      <td><?php echo $getin['cardrecive']; ?></td>
                        </tr>
  <?php }} ?>
               
                        
                        
                        <thead>
                        <tr role="row" dir="rtl">
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending"><?php echo $nmm; ?></th>
						<th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">التاريخ</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Position: activate to sort column ascending">المبلغ قبل التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">المبلغ بعد التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 150px;" aria-label="Age: activate to sort column ascending">كود التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 115px;" aria-label="Start date: activate to sort column ascending">ما تم تحويلة</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending">بطاقة المحول له</th></tr>
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
				  
			</div>	  
                </div>
             
  <!-- /top tiles -->

		  
		  
		  
		  
	
      
			<div class="col-md-12 col-sm-12 col-xs-12" dir="rtl">
                <div class="x_panel">
                  <div class="x_title">
                    <h dir="rtl">عمليات التحويل اليك<small>   سجل عمليات المبالغ المحولة اليك</small></h>
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
                     
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="dt-buttons btn-group">
</div>
<div id="datatable-buttons_filter" class="dataTables_filter">

</div>
<table id="datatable-button" class="table table-striped jambo_table bulk_action" role="grid" aria-describedby="datatable-buttons_info"  >
                      <thead>
                        <tr role="row" dir="rtl">
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">م</th>
						<th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">التاريخ</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 110px;" aria-label="Position: activate to sort column ascending">رصيدك بعد التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">المبلغ بعد التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 150px;" aria-label="Age: activate to sort column ascending">كود التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 115px;" aria-label="Start date: activate to sort column ascending">المبلغ المحول اليك</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending">بطاقته الشخصية</th></tr>
                      </thead>


                      <tbody>
                        
                        
                                           
                         <?php 
						 $ema=$userRow['userId'];
$rf=mysql_query('SELECT * from seremon WHERE id1="'.$ema.'" or id2="'.$ema.'"');
while($getin=mysql_fetch_array($rf)){
	
	if ($getin['toid']==$ema){
	 
	$dat=$getin['datetime'];
	$ber=$getin['beforeid'];
	$aft=$getin['afterid'];
	$cod=$getin['codeconv'];
	$mon=$getin['money'];
	$crd=$getin['cardrecive'];
        	   $nmsm=$nmsm+1;
  ?>
  <tr role="row" class="odd">
                          <td><?php echo $nmsm; ?></td>
                          <td tabindex="0" class="sorting_1"><?php echo $getin['datetime']; ?></td>
                          <td><?php echo $getin['beforeid']; ?></td>
                          <td><?php echo $getin['afterid']; ?></td>
                          <td><?php echo $getin['codeconv']; ?></td>
                          <td><?php echo $getin['money']; ?></td>
					      <td><?php echo $getin['cardrecive']; ?></td>
                        </tr>
  <?php }} ?>
               
               
                        
                        
                        
                        
                        
                        <thead>
                        <tr role="row" dir="rtl">
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending"><?php echo $nmsm; ?></th>
						<th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">التاريخ</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 110px;" aria-label="Position: activate to sort column ascending">رصيدك بعد التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Office: activate to sort column ascending">المبلغ بعد التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 150px;" aria-label="Age: activate to sort column ascending">كود التحويل</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 115px;" aria-label="Start date: activate to sort column ascending">المبلغ المحول اليك</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 89px;" aria-label="Salary: activate to sort column ascending">بطاقته الشخصية</th></tr>
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
				  
			</div>	  
                </div>
             
  <!-- /top tiles -->

		  
		  
		  
		  
	
        <!-- /footer content -->
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
	<script type="text/javascript" src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>


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


</html>