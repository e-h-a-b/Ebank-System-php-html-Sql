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

$add=mysql_query('SELECT SUM(id),SUM(mark),SUM(mark1),SUM(Female),SUM(male),SUM(collect) from `add`');
while($row=mysql_fetch_array($add))
{
	$id=$row['SUM(id)'];
	$mark=$row['SUM(mark)'];
	$mark1=$row['SUM(mark1)'];
	$Female=$row['SUM(Female)'];
	$male=$row['SUM(male)'];
	$collect=$row['SUM(collect)'];
	}
?>
  <?php 
  $table=mysql_query('SELECT * FROM `add`');
  while($row1=mysql_fetch_array($table))
  {
	  $sid=$row1['id'];
	  $smark=$row1['mark'];
	  $smark1=$row1['mark1'];
	  $sFemale=$row1['Female'];
	  $smale=$row1['male'];
	  $scollect=$row1['collect'];
	  
  ?>
 
  <?php } ?>
    <!-- Meta, title, CSS, favicons, etc. -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>&#1575;&#1604;&#1576;&#1606;&#1603; &#1575;&#1604;&#1575;&#1604;&#1603;&#1578;&#1585;&#1608;&#1606;&#1609; &#1575;&#1604;&#1605;&#1589;&#1585;&#1610; | </title>

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
         <?php include('topmenu.php');?>
         <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1732px;">          <!-- top tiles -->
            <?php include('stripuser.php'); ?>
          <!-- /top tiles -->
    </div>

   
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

<script src="https://colorlib.com/polygon/vendors/build/js/custom.min.js"></script>

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
<html lang="en">

<head>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="http://ebank.esy.es/login/style.css" />
<script scr="https://code.jquery.com/jquery-1.8.3.js"></script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>
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
	<section class="drawer" style="height: 140px;">
		<!-- <div> -->
			<header class="clickme" style="background: #2a3f54;">القائمة</header>
		<!-- </div> -->
		<div class="drawer-content" style="border-top: 5px solid #2a3f54;">
		<script>
       for(var i = 0; i <= 2; i++){
    $('#newgall li:nth-child(' + i + ')').addClass('curr');    
}
$('#newgall li:not(.curr)').hide();

var slide = function () {
    var Act_curr = $('#newgall li.curr:eq(0)');
    var newItem = $('#newgall li.curr:eq(1)');

    Act_curr.hide().removeClass('curr');

    if (newItem.next()[0] && newItem.next()[0].nodeName == 'LI') {
        newItem.next().show('fade').addClass('curr');
    } else {
        $('#newgall .curr').removeClass('curr').hide();
        $('#newgall li:first').addClass('curr').show('fade');
        $('#newgall li:nth-child(2)').addClass('curr').show('fade');
      
    }
    setTimeout(slide, 4500);
};

slide();
    </script>
			<style>
.n01 {
    margin: 1px 0;
    padding: 18px 0;
    height:240px;
    width:250px;
position:absolute;
left:-5px;
top:930px;
   /* border:1px solid #333;*/
    border-left-width: 1px;
    margin-left: 10px;
}

.newsblock {
    margin: 3px 0;
    padding: 1px 0;
    height:110px;
    width:220px;
    border:1px solid #333;

    left: 0px;
    top: 5px;
}
#newcompgall {
    list-style: none;
    padding: 0px;
    margin: 0px;
}

</style>
			<div class="n01" style="top: 0px;left:-5;right:20px;width: 250px;">


<ul dir="ltr" id="newgall" style="padding-left: 5px;padding-right: 5px;margin-top: 10px;">
<li class="" style="display: none;">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
          Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="//1.bp.blogspot.com/-7D5hqYYEPlQ/VXsAEAjcleI/AAAAAAAAAPk/c9V_SGsPcFY/s1600/100210.png" width="92"></div>
</div>
</li>
<li class="" style="display: none;">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
           Area =16 m2 , 24 Flate <br>
<img alt="Premium wordpress themes" height="78" src="//4.bp.blogspot.com/-nmzEfS11Krk/VXsC1AWNhiI/AAAAAAAAAPw/gta1WD_TIbg/s1600/0110.png" width="92">
</div>
</div>
</li>
<li style="display: none;" class="">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
          Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="//4.bp.blogspot.com/-gf_mKtYIZcs/VXsMFICVilI/AAAAAAAAAQA/MvDV_6kIzkU/s1600/01010.png" width="92"></div>
</div>
</li>
<li style="display: list-item;" class="curr">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
         Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="//1.bp.blogspot.com/-7D5hqYYEPlQ/VXsAEAjcleI/AAAAAAAAAPk/c9V_SGsPcFY/s1600/100210.png" width="92"></div>
</div>
</li>
<li style="display: list-item;" class="curr">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';" style="border: 1px solid rgba(0, 255, 255, 0.2);">
<div class="idrt">
           Area =16 m2 , 24 Flate<br>
<img alt="Premium wordpress themes" height="78" src="//4.bp.blogspot.com/-nmzEfS11Krk/VXsC1AWNhiI/AAAAAAAAAPw/gta1WD_TIbg/s1600/0110.png" width="92"></div>
</div>
</li>
<li style="display: none;" class="">
<div class="newsblock" onmouseout="this.style.border='1px solid rgba(0, 255, 255, 0.2)';" onmousemove="this.style.border='1px solid cyan';">
<div class="idrt">
          Area =16 m2 , 48 Flate <br>
<img alt="Premium wordpress themes" height="78" src="//4.bp.blogspot.com/-gf_mKtYIZcs/VXsMFICVilI/AAAAAAAAAQA/MvDV_6kIzkU/s1600/01010.png" width="92"></div>
</div>
</li>
</ul><!-- <script> $('#newgall li:first').addClass('curr'); $('#newgall li:not(:first)').hide(); var slide = function(){ var Act_curr = $('#newgall li.curr'); Act_curr.hide().removeClass('curr'); if (Act_curr.next()[0] &amp;&amp; Act_curr.next()[0].nodeName == 'LI') { Act_curr.next().show('fade').addClass('curr'); } else { $('#newgall li:first').addClass('curr').show('fade'); } setTimeout(slide, 4500); } slide(); </script>-->

</div>
<input name="firstname" type="text" id="c" style="text-align: center;background: rgba(78, 76, 76, 0.14);width: 45%;left: 300px;border: 2px solid #2a3f54;" onkeyup="convert()" value="" placeholder="أدخل كود الصفحة">
<input type="text" name="lastname" id="f" style="visibility:hidden">
	
			<div class="drawer-items">
			<ul>


<style>
#c {width:45%;position:fixed;}
#ty{position:fixed;}
</style> 
					<li>
						<a href="#">
						<div class="title">Item 1</div>
						<div class="time">8:00am</div>
						<div class="location">Other Info</div>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="title">Item 2</div>
						<div class="time">8:00am</div>
						<div class="location">Other Info</div>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="title">Item 3</div>
						<div class="time">8:00am</div>
						<div class="location">Other Info</div>
						</a>
					</li>
					<li>
						<a href="#">
						<div class="title">Item 4</div>
						<div class="time">8:00am</div>
						<div class="location">Other Info</div>
						</a>
					</li>
				</ul>
			</div>	
		<style type="text/css">

.thumbnails img {
left:80%;
  height: 20px;
border: 1px solid #555;
padding: 1px;
margin: 0 10px 10px 0;
}
.thumbnails img:hover {
border: 1px solid #00ccff;
cursor:pointer;
}
 </style>
		<div class="thumbnails" style="margin-top: 0px;width: 90%;">
<img alt="Image Not Loaded" name="img1" onmouseover="preview.src=img1.src" src="https://lh6.googleusercontent.com/proxy/KmVKkl0JMLX1HXuVCMcUDpbJ7h82NX2PNpK3VIFl1k9ayDlnUbDx2xr0bCIutKU69FQhVqwWzZSs4EZO_MsfMI6WDRYqgH32Qw=s0-d">
<img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://lh3.googleusercontent.com/proxy/RsT2Tud00mnFjUhW3iTAme-65gJd_RcU_Evpbh9RUYw0b6u6ofUSUB5MM4J0NXipzb47eMfslysrlVUdNudnm2xC=s0-d">
<img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://lh3.googleusercontent.com/proxy/RsT2Tud00mnFjUhW3iTAme-65gJd_RcU_Evpbh9RUYw0b6u6ofUSUB5MM4J0NXipzb47eMfslysrlVUdNudnm2xC=s0-d">
<img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://lh3.googleusercontent.com/proxy/RsT2Tud00mnFjUhW3iTAme-65gJd_RcU_Evpbh9RUYw0b6u6ofUSUB5MM4J0NXipzb47eMfslysrlVUdNudnm2xC=s0-d">
<img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://lh3.googleusercontent.com/proxy/RsT2Tud00mnFjUhW3iTAme-65gJd_RcU_Evpbh9RUYw0b6u6ofUSUB5MM4J0NXipzb47eMfslysrlVUdNudnm2xC=s0-d">
<img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://lh3.googleusercontent.com/proxy/RsT2Tud00mnFjUhW3iTAme-65gJd_RcU_Evpbh9RUYw0b6u6ofUSUB5MM4J0NXipzb47eMfslysrlVUdNudnm2xC=s0-d">
<img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://lh3.googleusercontent.com/proxy/RsT2Tud00mnFjUhW3iTAme-65gJd_RcU_Evpbh9RUYw0b6u6ofUSUB5MM4J0NXipzb47eMfslysrlVUdNudnm2xC=s0-d">
<img alt="Image Not Loaded" name="img2" onmouseover="preview.src=img2.src" src="https://lh3.googleusercontent.com/proxy/RsT2Tud00mnFjUhW3iTAme-65gJd_RcU_Evpbh9RUYw0b6u6ofUSUB5MM4J0NXipzb47eMfslysrlVUdNudnm2xC=s0-d">
<img alt="Image Not Loaded" name="img3" onmouseover="preview.src=img3.src" src="https://lh4.googleusercontent.com/proxy/58slc7CXQHfBQGvqGB3ZnPJRpnxBznscqbECJ0xLHx03giY9LqfIlC5ZT2KijfaBinp5MaiXlQCv9u41I3F_HHIzP69HYcyPX64=s0-d">
<img alt="Image Not Loaded" name="img4" onmouseover="preview.src=img4.src" src="https://lh5.googleusercontent.com/proxy/6bLIoZsFhUn76UdYbVYrrH-wnodP5PSyjMcXsaY7-IxwrZ176mBi3PePr_RRMy6oH4o2eoBuJ-17ovPEvZ3wjD5U0BUu0A0U727irsThPsk-dZ29VoM0NSHBNH3xKr4hIfYKkU1SNWL4XzOreT1T=s0-d">
<br>
</div>
		</div>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ebank.esy.es/login/jquery.slidedrawer.min.js"></script>
	<script>
	$(function(){
		$('.drawer').slideDrawer({
			showDrawer: false,
			// slideTimeout: true,
			slideSpeed: 600,
			slideTimeoutCount: 3000,
		});
	});
	</script>
</body>

</html> 

</html>