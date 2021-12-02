<?php	
	include 'config.php'
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/homeStyles.css">
		<script src="../js/homeScript.js"></script>
	
	<!-- add a tittle -->	
		<title>WOWme - Online Recipe Management System</title>
	</head>
	<body>
		<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
		
		<!-- add button -->
		<ul class = "list">
			<li class = "list"><a href = "../html/manageProfile.html" class = "list"><button type = "button">Manage Profile</button></a></li>
			<li class = "list"> <class = "list"><button type = "button" id = "btn" name="signout" onclick="location.href='Start.php'">Sign Out</button></li>
		</ul>
		<!-- add a logo -->
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center>
		
		<!-- add a horizontal menu -->
		<ul class="menu">
			<li class="menu"><a href="../php/home.php" class = "menu">Home</a></li>
			<li class="menu"><a  href="../../IT20250492/php/recipe.php" class = "menu">Recipes</a></li>
			<li class="menu"><a href="../../IT20219352/html/TopRated.html" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="../../IT20246082/php/feedback.php" class = "menu">Feedback</a></li>
			<li class="menu"><a href="../../IT20001216/php/promo.php" class = "menu">Promotions</a></li>
		</ul>
		<br>
		<table>
			<tr>
				<td><p id = "wowmetxt">WOWme - Online Recipe Management System</p></td>
				<td><img src = "../images/recipes.jpg" alt = "Recipe Picture" id = "recipes"><br><p class = "tabletxt">Discover and share exciting and new recipes!</p></td>
				<td><img src = "../images/toprated.jpg" alt = "Top Rated Picture" id = "toprated"><br><p class = "tabletxt">Learn about the best of recipes!</p></td>
			</tr>
			<tr>
			<td></td>
			<td><img src = "../images/promotions.jpg" alt = "Promotions Picture" id = "promotions"><br><p class = "tabletxt">Get updated on the latest news from the culinary world!</p></td>
			<td><img src = "../images/feedback.png" alt = "Feedback Picture" id = "feedback"><p class = "tabletxt">Got a question? Send it to us!</p></td>
			</tr>
		</table>
		<footer>
			<br>
			<center><p>Contact us:</p></center>
			<center><p>Phone - +94 81 222 4868</p></center>
			<center><p>E-mail - wowme@gmail.com</p></center>
			<br>
		</footer>
	</body>
</html>	