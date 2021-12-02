<?php

	include 'config.php';
	error_reporting(0);
	
	$title = $_POST['title'];
	$category = $_POST['category'];
	$date = $_POST['date'];
	$details = $_POST['details'];

	$sql = "INSERT INTO promotions(title, category, date, details) VALUES('$title', '$category', '$date', '$details')";
	
	if($conn -> query($sql)){
		header("Location:promoPanel.php"); 
	}

	else{
		echo "<script>alert('Error: Could not add Promotion')</script>".$conn -> error;
	}

	$conn -> close();

?>