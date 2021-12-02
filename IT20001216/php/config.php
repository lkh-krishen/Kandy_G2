<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "wowme_orms";
	
	$conn = new mysqli($server, $username, $password, $database);

	if($conn -> connect_error){
		die ("Connection Failed".$conn -> connect_error);
	}
	
?>