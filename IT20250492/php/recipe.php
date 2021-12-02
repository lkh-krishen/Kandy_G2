<?php
//Linking the configuration file
require 'config.php';

?>

<html>
	<head>
		<title>WOWme - Online Recipe Management System</title>
		<link rel = "stylesheet" href = "../styles/homeStyles.css">
		<link rel = "stylesheet" href = "../styles/styles.css">
		<script type="text/javascript" src="../js/recipe.js"></script>
	
	<script>
	function closeWin(){
	var myWindow;

	myWindow.close();
	}	
	</script>
	<style>
	table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
			border: 1px solid #ddd;
	}

	th, td {
  text-align: left;
  padding: 16px;
	}

	tr{
  background-color: #f2f2f2;
	}

	</style>
	</head>
	<body>
		<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
		<ul class = "list">
			<li class = "list"><a href = "../../IT20080662/html/manageProfile.html" class = "list"><button type = "button">Manage Profile</button></a></li>
			<li class = "list"><a href = "#" class = "list"><button type = "button" id = "btn">Sign Out</button></a></li>
		</ul>
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center>
		<ul class="menu">
			<li class="menu"><a href="../../IT20080662/php/home.php" class = "menu">Home</a></li>
			<li class="menu"><a href="recipe.php" class = "menu">Recipes</a></li>
			<li class="menu"><a href="../../IT20219352/html/TopRated.html" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="../../IT20246082/php/feedback.php" class = "menu">Feedback</a></li>
			<li class="menu"><a href="../../IT20001216/php/promo.php" class = "menu">Promotions</a></li>
		</ul>
<!--<br><br> 
    <input id="search" type="text" placeholder="Find a recipe">
	<br><br> -->
	
	<div id="mySidenav" class="sidenav">
			<a href="addrecipe.php" id="add">Add Recipe</a>
			
	</div>
	
<?php
    $sql = "select * from recipe";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		//read data
		while($row = $result->fetch_assoc()){
		//Read and utilize the row data
?>	
		
		<div style="border: 5px solid #555; margin-left : 20% ; width: 45% ;background-repeat:none" >
			<table>
			  <tr>
				<th><?php echo $row["Name"] ?></th>
				<tr><td><?php echo"<img src='../images/".$row['image']."'>"; ?></td></tr>
			  </tr>
			  <tr>
				<td><h4>Ingredients</h4><br>
				<p><?php echo $row["Ingredients"] ?></p></td>
			  </tr>
			  <tr>
				<td><h4><b>Steps</b></h4><br>  
				 
				 <p><?php echo $row["Steps"]?></p></td>
			  </tr>
			  <tr>
			  <td>
				<a href="editRecipe.php?GetID=<?php  echo $row['RecipeId'] ?>" ><button type="button" class="button" style=" background-color: #4CAF50; color: white"> Edit</button></a> 
			   &nbsp &nbsp<a href="deleteRecipe.php?GetID=<?php  echo $row['RecipeId'] ?>" ><button type="button" class="button" style=" background-color: #4CAF50; color: white" onclick="conformation()"> Delete</button></a> 
			   
			  </td> 
			 </tr>	
			</table>
		</div>
		
		
<?php			
			}
	}
	else
	{
		echo "no results";
	}
	$conn->close();	
?>
</body>
<footer>
			<br>
			<center><p>Contact us:</p></center>
			<center><p>Phone - +94 81 222 4868</p></center>
			<center><p>E-mail - wowme@gmail.com</p></center>
			<br>
		</footer>

</html>
	