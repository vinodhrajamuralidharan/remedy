<?php 
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database_name = 'remedy';
	
	$con = mysqli_connect($servername, $username, $password, $database_name) or die('Could not connect database!');
?>