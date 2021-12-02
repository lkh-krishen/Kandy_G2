<?php
	
	include 'config.php';
	
		$var_value=$_SESSION['Userid']
	$sql = "DELETE FROM  user WHERE   UserID= '$var_value'" ;

	if($conn -> query($sql)){
			header("Location:login.php");
		}
		
	else{
		echo "<script> alert('Error: Could not delete ')</script>";
	}
	 
	mysqli_close($conn);
	
?>