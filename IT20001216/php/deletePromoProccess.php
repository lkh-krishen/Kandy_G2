<?php

    include_once 'config.php';
	
?>

<?php

	$promotion_id = $_GET['id'];

	$sql = "DELETE FROM promotions WHERE promotion_id = '$promotion_id'";

	if($conn -> query($sql)){
			header("Location:edOrDelPromo.php");
		}
		
	else{
		echo "<script> alert('Error: Could not delete promotion')</script>";
	}
	 
	mysqli_close($conn);
	
?>