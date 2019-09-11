<?php
function dbConnect (){
 	$conn =	null;
 	$host = 'localhost';
 	$db = 	'Inventarios_Fijos';
 	$user = 'root';
 	$pwd = 	'mysql';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
	    exit;
	}
	return $conn;
 }

 ?>
