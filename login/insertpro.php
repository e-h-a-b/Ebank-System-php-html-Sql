<style>
.close{
    top: -10px;
}
</style>
<?php
 
	require_once 'dbconnect.php';
	include('config.php');
	
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
	$valnm=$_POST['codenm'];
	 if(isset($_POST['submit']))
    {
		$val=$_POST['code'];
		
  $qp = mysql_query("SELECT * FROM addproject WHERE  pernu='".$valnm."'");
 $qlll =mysql_query("SELECT proj FROM astbyan WHERE nu='".$valnm."'");
       	
	while($rpp = mysql_fetch_array($qlll)){
		$pername=$rpp['proj']; //اسم المشروع
	  
	  
	   while($rpoo = mysql_fetch_array($qp)){
		   if($val==$rpoo['idcode']){
			   $code=$val;
		  
	  //كود المشروع
	   $date=$rpoo['datepro'];//التاريخ
$address= $_POST['address'];
$datte= date("D dS M,Y h:i a");//تاريخ الاشتراك
$expext="100";// المكاسب المتوقعه
$perm=$_POST['name'];//مبلغ المشاركة
$perv="0";//عرض المشروع
$prre=$userRow['userId'];//رقم التعريفى للمستخدمين
$stauts=$rpoo['status'];//حالة المشروع
$sq = "UPDATE users SET Balance=Balance-'".$name."' WHERE userId='".$prre."'";
	  $ser=mysql_query("SELECT `perid`,`procode` FROM `userpor` WHERE `perid`='".$userRow['userId']."' And `procode`='$code' And pronum='$valnm'");
	$fin=mysql_fetch_array($ser);
				$countre = mysql_affected_rows();  // if uname/pass correct it returns must be 1 row
if($countre == 1){
	
	echo 'you are joined to this project';
}else{
$sql = "insert into userpor (procode,prodate,penfpro,pernam,staus,permon,perview,date,perid,pronum) values('$code','$datte','$expext', '$pername','$stauts','$perm','$perv','$date','$prre','$valnm' )";
}
	}} }

if(mysql_query($sql)){
   echo 'successfully inserted';
}else{
   echo 'could not insert';
}
    
    }
	
	
	
	
	
	?>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">المشتركين</h2>
<div class="bs-glyphicons" style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
                        <ul class="bs-glyphicons-list">          
     <?php 
	 // select loggedin users detail
$us=$_SESSION['user'];
$rf=mysql_query('SELECT perid FROM userpor WHERE procode="'.$code.'" And pronum="'.$pn.'" ');	
while($userfr=mysql_fetch_array($rf)){	
$gt=$userfr['perid'];

$infa=mysql_query('SELECT * FROM users WHERE userId="'.$gt.'"');

 while($getin=mysql_fetch_array($infa))
 {
	$crd=$getin['userpic'];
	$pass=$getin['userName']; 
  ?>

						<li>
<span><?php echo '<img src="'.htmlentities($getin['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:60px;max-height:60px;" />'; ?></span>
<span class="glyphicon-class"><a href="http://www.ebank.esy.es/<?php echo  htmlentities($getin['userName'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo  htmlentities($getin['userName'], ENT_QUOTES, 'UTF-8'); ?></a></span>
                                                 
</li>
<?php }} ?>
                          
                        </ul>
</div>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">العاملين</h2>
<div class="bs-glyphicons" style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
                        <ul class="bs-glyphicons-list">          
     
						<li>
<span><img src="http://blogs.timesofindia.indiatimes.com/wp-content/uploads/2015/12/mark-zuckerberg.jpg" alt="Avatar" style="max-width:60px;max-height:60px;"></span>
<span class="glyphicon-class"><a href="http://www.ebank.esy.es/ebank">ebank</a></span>
                                                 
</li>
                          
                        </ul>
</div><h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">كاميرات المراقبة</h2><div class="bs-glyphicons" style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
                        <ul class="bs-glyphicons-list">          
     
						<li>
<span><img src="http://blogs.timesofindia.indiatimes.com/wp-content/uploads/2015/12/mark-zuckerberg.jpg" alt="Avatar" style="max-width:60px;max-height:60px;"></span>
<span class="glyphicon-class"><a href="http://www.ebank.esy.es/ebank">ebank</a></span>
                                                 
</li>
                          
                        </ul>
</div>
<h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">احصائيات المشروع</h2><div class="bs-glyphicons" style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
                        <ul class="bs-glyphicons-list">          
     
						<li>
<span><img src="http://blogs.timesofindia.indiatimes.com/wp-content/uploads/2015/12/mark-zuckerberg.jpg" alt="Avatar" style="max-width:60px;max-height:60px;"></span>
<span class="glyphicon-class"><a href="http://www.ebank.esy.es/ebank">ebank</a></span>
                                                 
</li>
                          
                        </ul>
</div><h2 id="glyphicons-glyphs" style="padding-top: 5px;height: 30px;background: rgba(35, 94, 42, 0.52);">احداثيات المشروع</h2><div class="bs-glyphicons" style="overflow:scroll;height: 500px;background: rgba(18, 26, 32, 0.82);">
                        <ul class="bs-glyphicons-list">          
     
						<li>
<span><img src="http://blogs.timesofindia.indiatimes.com/wp-content/uploads/2015/12/mark-zuckerberg.jpg" alt="Avatar" style="max-width:60px;max-height:60px;"></span>
<span class="glyphicon-class"><a href="http://www.ebank.esy.es/ebank">ebank</a></span>
                                                 
</li>
                          
                        </ul>
</div>
<style>
::-webkit-scrollbar-corner {
    background: rgba(0, 0, 0, 0.5);
}
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
		margin-top: 10px;
        height: 97%;
        width: 75%;
        position: relative;
        
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#071832, #08393f);
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