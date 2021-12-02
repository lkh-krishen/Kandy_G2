<?php
	
		
	include 'config.php';

	$name =$_POST['txtname'];
	$review =$_POST['fname'];
	$rating =$_POST['rate']; 
	
	
	
	$sql = " INSERT INTO recipe2(username,review,rating)
	VALUES('$name','$review','$rating')";
	
	
	
	if($conn -> query($sql))
	{
		echo "Insert Successfully";
		header("Location:../html/TopRated.html");/*---------------------------------------------------------*/
	}	
	else
	{
		echo "Error is Inserting".$conn ->error ;
	}

	$conn -> close();	


?>