<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<body style="
    background-color: #13526f;
">
<div style="text-align: -webkit-center;">
<h1>The European Central Bank</h1>
<?php
$xml_url = "http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml";
if (($response_xml_data = file_get_contents($xml_url))===false){
    echo "Error fetching XML\n";
} else {
    libxml_use_internal_errors(true);
    $data = simplexml_load_string($response_xml_data);
    if (!$data) {
        echo "Error loading XML\n";
        foreach(libxml_get_errors() as $error) {
            echo "\t", $error->message;
        }
    } else {
		$ff=$data->Cube->Cube ;
		echo "<h2>".$ff['time']."</h2>"."<br>";
		 echo "<table>";
		echo "<tr>"."<th>"." اسم العملة"."</th>"."<th>"." سعر العملة مقابل اليورو"."</th>"."</tr>";
		echo "";
		
        foreach($data->Cube->Cube->Cube as $currency) {
           // if($currency['currency'] == 'USD') {
			    
                			   
				echo "<tr>"."<td>".$currency['currency']."</td>";
				echo "<td>".$currency['rate']."</td>"."</tr>";
            //}
        }
		
		 echo "</table>";
    }
}
?>
	<style>
#Render button {
    background-color: #095273 !important;
    border: 1px solid #2273ab !important;
    color: white;
    padding: 10px 24px !important;
    cursor: pointer !important;
    /* float: left; */
}
	td,  th {
   /* border: 1px solid #ddd;*/
    padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    /*background-color: ;*/
	    border: 1px solid rgb(23, 95, 136) !important;
    color: #38c301;
}
tr:nth-child(even) {
    background-color: #15405d;
}
tr:hover {
    background-color: #065079bd;
}
button {
    background-color: #095273;
    border: 1px solid #2273ab;
    color: white;
    padding: 10px 24px;
    cursor: pointer;
    /* float: left; */
}
td  {
    border: 1px solid #175f88;
    padding: 8px;
	color: #2a9ade;
}</style>
</div>
</body>
</html>