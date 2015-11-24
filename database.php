<?php

$hoststring = "mysql:host=localhost;dbname=oculoidscomics";

$username = "%";

$password = "";

//creates connection to database
try {
	$db = new PDO($hoststring, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

?>