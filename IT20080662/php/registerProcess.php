<?php
	include 'config.php';

	$UserID= $_POST['userid'];
	$Name = $_POST['name'];
	$Email = $_POST['mail'];
	$Password = $_POST['pswrd'];
	
	$sql = "INSERT INTO user (UserID, Name, Email, Password)
				VALUES ('$UserID','$Name', '$Email', '$Password')";
	
	if($conn -> query($sql)){
		header("Location:../php/home.php"); 
	}
	else{
		echo "Error" .$conn -> error;
	}

	$conn -> close();

?>