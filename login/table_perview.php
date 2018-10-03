<?php
	
	include_once 'dbconnect.php';
CREATE TABLE tbl_categories (
  'cat_id' int(5) NOT NULL AUTO_INCREMENT,
  'cat_name' varchar(20) NOT NULL,
  PRIMARY KEY ('cat_id')
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO 'tbl_categories' ('cat_id', 'cat_name') VALUES
(1, 'samsung'),
(2, 'nokia'),
(3, 'htc');


CREATE TABLE IF NOT EXISTS 'tbl_products' (
  'product_id' int(5) NOT NULL AUTO_INCREMENT,
  'product_name' varchar(30) NOT NULL,
  'cat_id' int(5) NOT NULL,
  PRIMARY KEY ('product_id')
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


INSERT INTO 'tbl_products' ('product_id', 'product_name', 'cat_id') VALUES
(1, 'galaxy note', 1),
(3, 'lumia 530', 2),
(5, 'htc grid', 3);


SELECT tbl_a.column1 , tbl_a.column2 
       tbl_b.column1 , tbl_b.column2
FROM   tbl_a , tbl_b
WHERE  tbl_a.commonfield=tbl_b.commonfield
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Using single SQL</title>
<style>
table,td,th
{
 padding:10px;
 border-collapse:collapse;
 font-family:Georgia, "Times New Roman", Times, serif;
 border:solid #ddd 2px;
}
</style>
</head>
<body>
<table align="center" border="1" width="100%">
<tr>
<th>product id</th>
<th>product name</th>
<th>category name</th>
</tr>
<?php
mysql_connect("localhost","root");
mysql_select_db("dbtuts");
$res=mysql_query("SELECT c.* , p.* FROM tbl_categories c,tbl_products p WHERE c.cat_id=p.cat_id");
while($row=mysql_fetch_array($res))
{
 ?>
    <tr>
    <td><p><?php echo $row['product_id']; ?></p></td>
    <td><p><?php echo $row['product_name']; ?></p></td>
    <td><p><?php echo $row['cat_name']; ?></p></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>