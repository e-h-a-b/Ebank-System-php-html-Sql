<?php
$x=1;
while( $x<=2) {
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
$Card=$subA.$subB.$subC.$subD.$subE.$subF.$subG.$subH.$subI.$subJ.$subK.$subL.$subM.$subN.$subO.$subP.$subQ; 
 if($cheCard=120){
	  echo  '</br>';
  print ($Card);
  echo  '</br>';
print ($cheCard);
 }
  $x++;
} 
	

	

?>
