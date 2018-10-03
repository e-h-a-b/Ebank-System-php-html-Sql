<?php
include('config.php');
$s1=$_REQUEST["n"];
$select_query="select * from users where userName like '%".$s1."%'";
$sql=mysql_query($select_query) or die (mysql_error());
$s="";
while($row=mysql_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='http://www.ebank.esy.es/".$row['userName']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='".$row['userpic']."'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['userName']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Rs.".number_format($row['userId'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
//<a href='pview.php?id=".$row['id']."&productname=".$row['productname']."'>".$row['productname']."></a>
//<p>".$row['productname']."</p><br>	<p>".$row['producttotalprice']."</p>
?>