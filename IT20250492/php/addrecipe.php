<?php 
	require 'config.php' ;

?>
<html>
	<head>
		<title>WOWme - Online Recipe Management System</title>
		<link rel = "stylesheet" href = "../styles/homeStyles.css">
		<link rel = "stylesheet" href = "../styles/styles.css">
		<link rel = "stylesheet" href = "../styles/add.css">
		<script src="../js/recipe.js">
	<script>
	function closeWin(){
	var myWindow;

	myWindow.close();
	}	
	</script>
	
	</head>
	<body>
		<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
		<ul class = "list">
			<li class = "list"><a href = "#" class = "list"><button type = "button">Manage Profile</button></a></li>
			<li class = "list"><a href = "#" class = "list"><button type = "button" id = "btn">Sign Out</button></a></li>
		</ul>
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center>
		<ul class="menu">
			<li class="menu"><a href="home.html" class = "menu">Home</a></li>
			<li class="menu"><a href="recipe.php" class = "menu">Recipes</a></li>
			<li class="menu"><a href="#" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="#" class = "menu">Feedback</a></li>
			<li class="menu"><a href="promo.html" class = "menu">Promotions</a></li>
		</ul>
		<br> 
	<br><br>
		<img src="../images/logo.jpg" align="right" id="img1">
	<br>
	<div>
		<form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
			<label>Recipe name </label>
			<input type="text" name="name" id="rname" placeholder="eg:Biriyani" required/>
			<br><br>
			<label>Ingredients</label>
			<textarea name="field2" id="ingredients" placeholder="-rice  -water ..etc" required></textarea>
			<br><br>
			<label>Steps</label>
			<textarea name="field3" id="Steps" placeholder="-clean rice with water..etc" required></textarea>
			<br><br>
			<label>Image<label>
			<input type="file" name="image" accept="image" />
			
			<input type="submit" value="submit" name="btn" />	
		</form>
	</div>
	
</body>
<footer>
			<br>
			<center><p>Contact us:</p></center>
			<center><p>Phone - +94 81 222 4868</p></center>
			<center><p>E-mail - wowme@gmail.com</p></center>
			<br>
		</footer>
</html>



<?php

	if(isset($_POST["btn"])){
	$NAME=$_POST["name"];
	$INGREDIENTS=$_POST["field2"] ;
	$STEPS=$_POST["field3"] ;
	//the path to store the uploaded image 
	$target="../images/".basename($_FILES['image']['name']) ;
	$image=$_FILES['image']['name'];

	$sql= "INSERT INTO recipe(RecipeId,Name,Ingredients,Steps,image) VALUES('','$NAME','$INGREDIENTS','$STEPS','$image')" ;
	
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
	}
			
		if(mysqli_query($conn,$sql)&&(move_uploaded_file($_FILES['image']['tmp_name'],$target))){			
			echo"Successfuly added";
			header("location: recipe.php");
		}
		else{
			echo"error in insertion!!";
		} 
			
			
	mysqli_close($conn) ;		
	}
			
?>
