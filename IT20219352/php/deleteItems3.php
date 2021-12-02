<?php
    include 'config.php';



	$record = $_GET['id'];
	
	$sql = "DELETE FROM recipe3 WHERE review_ratingID = '$record'";
	
	if(mysqli_query($conn ,$sql))
	{
		echo "<script> alert('Records deleted successfully!!!!')</script>";
		header("Location:../php/new3.php");
	} 
	else
	{
		echo "<script> alert('ERROR ')</script>" ;
	}
	 

?>

