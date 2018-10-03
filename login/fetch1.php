<?php

ob_start();
	session_start();
	require_once 'dbconnect.php';
	include('config.php');
?>
  
 
 
  <h2 class="StepTitle">„Õ ÊÏ «·ŒÿÊ… «·À«‰Ì…</h2>
                      
<div class="bs-glyphicons">

                        <ul class="bs-glyphicons-list">
						
						<script>
						$('#myform').submit(function(){ return false; });
$('#submit').click(function(){
   $.post( $('#myform').attr('action'), $('#myform :input').serializeArray(),
                });
function(output){   $('#result').html(output); }); });
						</script>
<?php
if(isset($_POST["id"]) && !empty($_POST["id"]))
{
	$st=$_POST['id'];
	$st1=$_POST['id']+7;
	
	   $qp = mysql_query("SELECT * FROM addproject WHERE  pernu='1' ORDER BY pernu DESC LIMIT  ".$st1."");
 $qlll =mysql_query("SELECT proj FROM astbyan WHERE nu='1' ORDER BY nu DESC LIMIT  ".$st1."");
       	
 		if($qlll === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
	while($rpp = mysql_fetch_array($qlll)){
		$pername=$rpp['proj']; //«”„ «·„‘—Ê⁄
	  $stauts=$rpp['status'];//Õ«·… «·„‘—Ê⁄
	  
	   while($rpoo = mysql_fetch_array($qp)){
	  $code=$rpoo['idcode'];//ﬂÊœ «·„‘—Ê⁄
	   $date=$rpoo['datepro'];//«· «—ÌŒ
	 $lat=$rpoo['lat']; //«”„ «·„‘—Ê⁄
	  $lng=$rpoo['lng'];//Õ«·… «·„‘—Ê⁄
	  $nw=$rpoo['nuorworker'];
	  $pr=$rpoo['pric'];
	  $n=1;
	  $yu=$n+1;
	  ?>
             
<div id="<?php echo $code;?>" class="modalDialog">
<div style="overflow:scroll;">
    <a href="#close" title="Close" class="close" style="top: 10px;">X</a>
<h2 style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);"> Project : <?php echo $code;?></h2>
<p>Date : <?php echo $date; ?> & N.O. Of Worker : <?php echo  $nw; ?> & Price of project : <?php echo $pr; ?></p>
<?php 
if($code==$rpoo['idcode']){
			   $code=$rpoo['idcode'];
	$se=mysql_query("SELECT `perid`,`procode` FROM `userpor` WHERE `perid`='".$userRow['userId']."' And `procode`='$code' And pronum='1'");
	$fi=mysql_fetch_array($se);
	$counte = mysql_affected_rows();  // if uname/pass correct it returns must be 1 row
if($counte == 1){
	
	echo 'you are joined to this project';
 }else{
?>
<form id='myform' action='insertpro.php' method="post">
                        <a href="#<?php echo $code; ?>">00000</a>   
						<input type ="text" name="name" maxlength="3" placeholder="ﬁ„ »≈œŒ«· «·„»·€"  value="0"  >
						<input type ="text" name="code" maxlength="3" style="display:none;" placeholder="ﬁ„ »≈œŒ«· «·„»·€"  value="<?php echo $code; ?>"  >
						<input type ="text" name="codenm" maxlength="3" style="display:none;" placeholder="ﬁ„ »≈œŒ«· «·„»·€"  value="1"  >
						<input type="submit" name="submit" class="buttonNext btn btn-success" value="ﬁ„ »«·«‘ —«ﬂ" />
</form><?php
	   }}
						 ?>
<?php
$pn=1;
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
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">◊</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"> ﬂÊœ «·„‘—Ê⁄ <?php echo $code;?>  ›«’Ì· «·„‘—Ê⁄</h4>
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

}} ?> </ul>
                      </div>
                  <div class="show_more_main" id="show_more_main<?php echo $code; ?>">
        <span id="<?php echo $code; ?>" class="show_more" title="Load more posts">Show more</span>
        <span class="loding" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>