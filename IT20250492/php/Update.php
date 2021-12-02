<?php
    require 'config.php';
?>
<?php
	if(isset($_POST['update'])){
		
	//get all the submitted data from the form	
	$ID = $_POST["id"];
	$NAME = $_POST["name"];
	$INGREDIENTS = $_POST["Ingredients"] ;
	$STEPS = $_POST["Steps"] ;
	$image = $_FILES['image']['name'];

	
	$sql="UPDATE recipe SET 
		 Name= '".$NAME."',
	     Ingredients='".$INGREDIENTS."',
		 Steps='".$STEPS."',
		 image='".$image."' 
		 WHERE RecipeId='".$ID."' ";
		 
		 
	if($conn -> query($sql)){
			
		echo "<script> alert('Records deleted successfully!!!!')</script>";
		header("Location:recipe.php");
		
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	//Close connection
	mysqli_close($conn);
	}