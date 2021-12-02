<?php
    include_once 'config.php';
?>

<?php
	$ID=$_GET['GetID'];
	
	$sql = "DELETE FROM recipe WHERE RecipeId = '$ID'";
	
	if($conn -> query($sql)){
		echo "<script> alert('Records deleted successfully!!!!')</script>";
		header("Location:recipe.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	//Close connection
	mysqli_close($conn);

?>

