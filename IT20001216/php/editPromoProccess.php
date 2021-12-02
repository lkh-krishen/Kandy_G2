<?php
    include_once 'config.php';
?>

<?php

	$id = $_POST["id"];
	$ti = $_POST["ti"];
	$ca = $_POST["ca"];
	$da = $_POST["da"];
	$de = $_POST["de"];
	 
	$sql = "UPDATE promotions SET title = '$ti', category = '$ca', date = '$da', details = '$de' WHERE promotion_id='$id'";
	
	if($conn -> query($sql)){
		header("Location:edOrDelPromo.php");
	} 
	else{
		echo "<script> alert('Error: Could not edit promotion')</script>" ;
	}
	 
	mysqli_close($conn);

?>