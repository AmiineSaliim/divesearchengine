<?php
ob_start();

try {

	$con = new PDO("mysql:dbname=3696456_dive;host=fdb28.awardspace.net", "3696456_dive", "Western11Bitch");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>