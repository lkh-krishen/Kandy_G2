<!DOCTYPE html>

<html>

	<head>
	
		<title>WOWme - Online Recipe Management System</title>
		
		<link rel = "stylesheet" href = "../css/promStyles.css">
		
	</head>
	
	<body>
	
		<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
	
		<ul class = "list">
		
			<li class = "list"><a href = "../../IT20080662/html/manageProfile.html" class = "list"><button type = "button">Manage Profile</button></a></li> <!-- Button which would redirect to user's profile page-->
			
			<li class = "list">
				<a class = "list">
					<form method = "POST" action = "promoSignoutProccess.php">
						<input type = "submit" name = "promoSignout" value = "Sign Out" id = "btn">
					</form>
				</a>
			</li>
		
		</ul>
		
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center> <!-- Adding logo-->
		
		<ul class="menu">                                                          <!--Adding navigation bar-->
			<li class="menu"><a href="../../IT20080662/php/home.php" class = "menu">Home</a></li>
			<li class="menu"><a href="../../IT20250492/php/recipe.php" class = "menu">Recipes</a></li>
			<li class="menu"><a href="../../IT20219352/html/TopRated.html" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="../../IT20246082/php/feedback.php" class = "menu">Feedback</a></li>
			<li class="menu"><a href="promo.php" class = "menu">Promotions</a></li>
		</ul>
		
		<br>
		
		<div style = "background-color: white; border-radius: 10px;">
		
		<br>
		
			<?php
			
				include 'config.php';
				
				$sql = "SELECT title, category, date, details FROM promotions";
				
				$result = $conn -> query($sql);
			
				if($result -> num_rows > 0){
				
					while($row = $result -> fetch_assoc()){
						echo "<br>&nbsp&nbsp&nbsp&nbspTitle: ".$row['title']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCategory: ".$row['category']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpload Date: ".$row['date']."<br><br>&nbsp&nbsp&nbsp&nbsp".$row['details']."<br><br>";
					}
					
				} 
				
				else{
				
					echo "No Promotions";
					
				}

			?>
			
			<br>
			
		</div>
		
		<br>
		
	</body>
	
	<footer> <!-- Adding footer with contact details-->
	
			<br>
			<center><p>Contact us:</p></center>
			<center><p>Phone - +94 81 222 4868</p></center>
			<center><p>E-mail - wowme@gmail.com</p></center>
			<br>
			
	</footer>
	
</html>