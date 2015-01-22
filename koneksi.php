<?php
$host = "mysql.idhostinger.com";
$user = "u630560246_root";
$password = "123456";
$database_name = "u630560246_web";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
