<?Php

	$dbhost = 'mysql.hostinger.in';
	$dbname = 'u856423732_bank';  
	$dbuser = 'u856423732_egyba';                  
	$dbpass = '9874123951753';                  
	
            try{
		
		$dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
		$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $ex){
		
		die($ex->getMessage());
	}
