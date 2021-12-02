
<?php
include 'config.php';
?>
	

<!DOCTYPE html>
<html>
	<head>
		<title>WOWme - Online Recipe Management System</title>
		<link rel = "stylesheet" href = "../css/homeStyles.css">
		<script type="text/javascript" src="../js/myScript.js"></script>
	</head>
	<body>
	
		<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
		<ul class = "list">
			<li class = "list"><a href = "../../IT20080662/html/manageProfile.html" class = "list"><button type = "button">Manage Profile</button></a></li>
			<li class = "list"><a href = "#" class = "list"><button type = "button" id = "btn">Sign Out</button></a></li>
		</ul>
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center>
				
		<!--navigation bar-->
		
		<ul class="menu">
			<li class="menu"><a href="../../IT20080662/php/home.php" class = "menu">Home</a></li>
			<li class="menu"><a href="../../IT20250492/php/recipe.php" class = "menu">Recipes</a></li>
			<li class="menu"><a href="TopRated.html" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="../../IT20246082/php/feedback.php" class = "menu">Feedback</a></li>
			<li class="menu"><a href="../../IT20001216/php/promo.php" class = "menu">Promotions</a></li>
		</ul>
		
		<table class="table">
	<tr>
				<th></th>
				
			</tr>
			<tr>
				<td> <img src="../images/download.jpg" alt="img1" class="tableimg" </td>
				<td>
					<ul>
						<li class="txtline2"><b> Food type 01</b></li>
						<li class="txtline">Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot.)</li>
						<button class="" onclick="window.location.href='review.html';">
								Add Review and Rating
						</button>
						<button class="" onclick="window.location.href='../php/new1.php';">
								 Reviews and Ratings
						</button>
					</ul>
				</td>
			</tr>
			
			<tr>
				<td> <img src="../images/p1.jpg" alt="img2" class="tableimg" </td>
				<td>
					<ul>
						<li class="txtline2"><b> Food type 02</b></li>
						<li class="txtline">Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot.)</li>
						<button class="" onclick="window.location.href='review2.html';">
								Add Review and Rating
						</button>
						<button class="" onclick="window.location.href='../php/new2.php';">
								 Reviews and Ratings
						</button>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <img src="../images/p3.jpg" alt="img3" class="tableimg" </td>
				<td>
					<ul >
						<li class="txtline2"><b> Food type 03</b></li>
						<li class="txtline">Pizza, dish of Italian origin consisting of a flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese, and many other ingredients, baked quickly—usually, in a commercial setting, using a wood-fired oven heated to a very high temperature—and served hot.)</li>
						<button class="" onclick="window.location.href='review3.html';">
								Add Review and Rating
						</button>
						<button class="" onclick="window.location.href='../php/new3.php';">
								 Reviews and Ratings
						</button>
					</ul>
				</td>
			</tr>
	</table>
		
	<!--footer-->
		<footer >
		
			<br>
			<center><p>Contact us:</p></center>
			<center><p>Phone - +94 81 222 4868</p></center>
			<center><p>E-mail - wowme@gmail.com</p></center>
			<br>
			
		</footer>
</body>
</html>
	