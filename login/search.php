<?php
  /*  mysql_connect("mysql.hostinger.in", "u856423732_egyba", "9874123951753") or die("Error connecting to database: ".mysql_error());
    *//*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     include('dbconnect.php');
   /* mysql_select_db("u856423732_bank") or die(mysql_error());*/
    /* tutorial_search is the name of database we've created */
?>
 

<html >
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body style="background-color: #122a39;background-image: linear-gradient(rgba(255,255,255,.05) 2px, transparent 2px), linear-gradient(90deg, rgba(255,255,255,.04) 2px, transparent 2px), linear-gradient(rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.03) 1px, transparent 1px), linear-gradient(0deg, rgba(0,0,0,.3) 0, transparent 100px);background-size: 100px 100px, 100px 100px, 20px 20px, 20px 20px, 100% 100%;">

<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM users
            WHERE (`userName` LIKE '%".$query."%') OR (`userEmail` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             echo '<div style="background-color: rgba(22, 54, 75, 0.42);width: 50%;"><img src="'.htmlentities($results['userpic'], ENT_QUOTES, 'UTF-8').'" alt="Avatar" style="max-width:200px;max-height:200px;border-radius: 6%;padding-left: 10px;border-top-width: 10px;padding-top: 10px;" />';
                echo '<p><h3 style="padding-left: 10px;padding-bottom: 5px;color: rgba(26, 92, 139, 0.85);"> <a href="http://ebank.esy.es/'.$results['userName'].'" >'.$results['userName'].'</a> <span style="padding-left:10 px;"> '.$results['userEmail'].' </span></h3></p></div>';
                // posts results gotten from database(title and text) you can also show id ($results['id'])
           
		   }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>







</body>
</html>