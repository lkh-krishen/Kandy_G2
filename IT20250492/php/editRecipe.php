<?php 
	include_once 'config.php' ;
?>	

<html>
	<head>
		<title>WOWme - Online Recipe Management System</title>
		<link rel = "stylesheet" href = "../styles/homeStyles.css">
		<link rel = "stylesheet" href = "../styles/styles.css">
		<link rel = "stylesheet" href = "../styles/edit.css">
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
<?php	
	
		$ID=$_GET['GetID'];
		
		$sql = "SELECT * FROM recipe where RecipeId='".$ID."' ";
		$result = mysqli_query($conn,$sql);
		
		if ($result->num_rows > 0) {
		
			while($row = mysqli_fetch_assoc($result)) {
		
			$ID = 	$row['RecipeId'];
			$NAME=	$row["Name"];
			$INGREDIENTS= $row["Ingredients"]; 
			$STEPS=	$row["Steps"];
	 
			$image=	$row["image"];

			}
		
		}
		else 
			{
			echo"no results!!";
			}
		
?>		

	<br><br>
		<img src="../images/yummy.jpg" align="right" style="margin-top:12% ; margin-right : 20%" width="30%" height="40%">
		<div>
		<form class="form" method="POST" action="Update.php" enctype="multipart/form-data">
			
			<input type="hidden"  name="id"  value="<?php echo $ID; ?>" />
			
		
			<li>
			<label>Recipe Name</label>
			<input type="text" id="rname" name="name"  style="inline"  value="<?php echo $NAME; ?>"/>
			<br><br>
			</li>
			
			<li>
			<label>Ingredients</label>
			<textarea  id="ingredients" name="Ingredients" ><?php echo $INGREDIENTS; ?> </textarea>
			<br><br>
			</li>
			
			<li>
			<label>Steps</label>
			<textarea id="steps" name="Steps"><?php echo $STEPS; ?> </textarea>
			<br><br>
			</li>
			
			<li>
			<label>Recipe image</label><br>
			<img src="../images/<?php echo $image; ?>" >
			<br><label>Please insert image</label><br>
			<input type="file" name="image" required />
			<br><br>
			</li>
			
			<button type="submit" name="update" style=" background-color: #4CAF50; color: white"> Update</button>
			

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