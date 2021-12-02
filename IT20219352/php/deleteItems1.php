<?php
    include 'config.php';



	$record = $_GET['id'];
	
	$sql = "DELETE FROM recipe1 WHERE review_ratingID = '$record'";
	
	if(mysqli_query($conn ,$sql))
	{
		echo "<script> alert('Records deleted successfully!!!!')</script>";
		header("Location:../php/new1.php");
	} 
	else
	{
		echo "<script> alert('ERROR ')</script>" ;
	}
	 

?>

