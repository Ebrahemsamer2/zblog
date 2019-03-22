<?php 

	$dsn = "mysql:host=localhost;dbname=zblog";
	$dbusername = "root";
	$dbpassword = "";

	try {
		$con = new PDO($dsn, $dbusername, $dbpassword);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e) {
		echo "Error: ". $e->getMessage();
	}

?>