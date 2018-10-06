<?php
include("config.inc.php"); 
if(isset($_POST['getresult']))
  {
   

    $no = $_POST['getresult'];
    $select = mysql_query("select posst from wallp limit $no,10");
    while($row = mysql_fetch_array($select))
    {
      echo "<p class='rows'>".$row['posst']."</p>";
    }
    exit();
  }

?>