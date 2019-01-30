<?php
	/* Database connection settings */
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'tw_project';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
?>