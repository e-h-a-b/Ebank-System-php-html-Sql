
  <?php  
	 
	require_once 'config.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['users']) ) {
			header("Location: http://www.ebank.esy.es/Login.php");
		exit;
	}
	$email=$_SESSION['users'];
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM Developer WHERE Email='".$email."'");
	$userRow=mysql_fetch_array($res);
	
	//عدد الاعضاء$totusers
	//رصيد البنك$totbalance
	//عدد المشروعات$project
	//عدد الوظائف$jobs
	//رصيدك$balance
	//أرباحك$benfit
 
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

 
<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>اختيار الصفحة</title>
 

<style>

 td,  th {
    border: 1px solid #ddd;
    padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<p > <?php echo $userRow['Email'];?></p>
<table class="tableview" tabindex="1" cellspacing="3" data-target="#table-cell-menu" style="display: table;table-layout: auto;width: 100%;margin-left: 0px;"><colgroup>

<col style="width: auto;"><col style="width: auto;"><col style="width: auto;"><col style="width: auto;"><col></colgroup>
<tbody>
<tr>
<td class="aux-cell aux-cell-corner"><span>
<i class="icon-unchecked"></i></span></td>
<td class="aux-cell aux-cell-column aux-cell-selected" data-target="#table-aux-col-menu"><span>A</span>
<div class="size-handle" style="position: absolute; z-index: 10; top: 307px; left: 201.5px;"></div></td>
<td class="aux-cell aux-cell-column aux-cell-selected" data-target="#table-aux-col-menu"><span>B</span>
<div class="size-handle"></div></td>
<td class="aux-cell aux-cell-column aux-cell-selected" data-target="#table-aux-col-menu"><span>C</span>
<div class="size-handle"></div></td>
<td class="aux-cell aux-cell-column aux-cell-selected" data-target="#table-aux-col-menu"><span>D</span>
<div class="size-handle"></div></td>
<td class="aux-cell aux-cell-column aux-cell-selected" data-target="#table-aux-col-menu"><span>E</span><div class="size-handle"></div></td>
</tr>
<tr>
<td class="aux-cell aux-cell-row" data-target="#table-aux-row-menu"><span>1</span></td>
<td class="" colspan="1" rowspan="1" style="display: table-cell; text-align: center; vertical-align: middle;"><div class="wrap"><div style="margin: 10px 5px;" class="" contenteditable="false">لينك الصفحة</div></div></td>
<td rowspan="1" class="" style="display: table-cell; text-align: center; vertical-align: middle;" colspan="1"><div class="wrap"><div style="margin: 10px 5px;" class="" contenteditable="false">اسم الصفحة</div></div></td>
<td colspan="1" rowspan="1" class="" style="display: table-cell; text-align: center; vertical-align: middle;"><div class="wrap"><div style="margin: 10px 5px;" class="" contenteditable="false">اسم المبرمج المطور</div></div></td>
<td class="" colspan="1" rowspan="1" style="display: table-cell; text-align: center; vertical-align: top;"><div class="wrap"><div style="margin: 10px 5px;" class="" contenteditable="false">كود فتح الصفحة بسرعة</div></div></td>
<td class=""><div class="wrap"><div style="margin: 10px 5px;" class="" contenteditable="false">حالة الصفحة مكتملة/غير مكتملة</div></div></td>
</tr>
<?php 
 
$add=mysql_query('SELECT * FROM Devpage ');
while($row=mysql_fetch_array($add))
{
	$num=$row['A'];
	$page=$row['B'];
	$Name=$row['C'];
	$developer=$row['D'];
	$shortcut=$row['E'];
	$persent=$row['F'];
	?>
<tr>
<td class="aux-cell aux-cell-row" data-target="#table-aux-row-menu"><span><?php echo $row['A']; ?></span></td>
<td class="" style="text-align: center;"><div class="wrap"><div class="" contenteditable="false" style="margin: 10px 5px;"><?php echo $page; ?></div></div></td>
<td class="" style="text-align: center;"><div class="wrap"><div class="" contenteditable="false" style="margin: 10px 5px;"><?php echo $Name; ?></div></div></td>
<td class="" style="text-align: center;"><div class="wrap"><div style="margin: 10px 5px;">

<button type="button" id="btn1" onclick="dosomething(this);">سأعمل على الصفحة</button>

</div></div></td>
<td class="" style="text-align: center;"><div class="wrap"><div style="margin: 10px 5px;"><?php echo $shortcut; ?></div></div></td>
<td class="" style="text-align: center;"><div class="wrap"><div style="margin: 10px 5px;"><?php echo $persent; ?></div></div></td>
</tr><?php   } ?>

</tbody>


</table>



<script type="text/javascript">
    function dosomething(source){
        // Trigger the id of the element that was clicked
        alert(source.id);
    }
</script>

</body></html>