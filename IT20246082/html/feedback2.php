<!-- HTML part-->
<?php
		
		session_start();
		require('config.php');

		
?>
<html lang='en'>
	<head>
		<title>WOWme - Online Recipe Management System</title>
		<link rel = "stylesheet" href = "../css/feedbackStyle.css">
		<script src ="../js/feedback.js"></script>
	</head>
	<body>
		<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
		<ul class = "list">
			<li class = "list"><a href = "#" class = "list"><button type = "button">Manage Profile</button></a></li>
			<li class = "list"><a href = "#" class = "list"><button type = "button" id = "btn">Sign Out</button></a></li>
		</ul>
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center>
		<ul class="menu">
			<li class="menu"><a href="home.php" class = "menu">Home</a></li>
			<li class="menu"><a href="#" class = "menu">Recipes</a></li>
			<li class="menu"><a href="#" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="feedback.php" class = "menu">Feedback</a></li>
			<li class="menu"><a href="promo.html" class = "menu">Promotions</a></li>
		</ul>
		
		<div class = "form-area1">
		<h4>Your overall satisfaction of our website</h4>
			<form method = 'post' name="myForm2" onsubmit="return validateForm2()" action="feedback13.php" >
				<label id = "p3">Rate your satisfaction</label><br>
				<div class="rate">
					<input type="radio" id="star5" name="rate" value="5" />
					<label for="star5" title="text">5 stars</label>
					<input type="radio" id="star4" name="rate" value="4" />
					<label for="star4" title="text">4 stars</label>
					<input type="radio" id="star3" name="rate" value="3" />
					<label for="star3" title="text">3 stars</label>
					<input type="radio" id="star2" name="rate" value="2" />
					<label for="star2" title="text">2 stars</label>
					<input type="radio" id="star1" name="rate" value="1" />
					<label for="star1" title="text">1 stars</label>
				</div>
				
				<label id = "p3"></label><br><br>
				<label id = "p3"></label><br><br>
				<label id = "p3">Choose a subject and give us your opinion</label><br><br>
				<input type = 'radio' name = 'subject' class = 'radiostyle' id = "form3" value = 'Products' checked ><label id = "p3">Products</label><br>
				<input type = 'radio' name = 'subject' class = 'radiostyle' id = "form3" value = 'Suggetions' checked ><label id = "p3">Suggetions</label><br>
				<input type = 'radio' name = 'subject' class = 'radiostyle' id = "form3" value = 'Compliments' checked ><label id = "p3">Compliments</label><br><br>
				
				<textarea placeholder="Please type in your comment..." name= "cm" id = "form2"></textarea><br><br>
									
				<input type = "submit" id = "submit1" value = "Submit"><br>
					
			</form>	
		</div>
		<br><br>
		<!--
		<footer>
			<br>
			<center><p>Contact us:</p></center>
			<center><p>Phone - +94 81 222 4868</p></center>
			<center><p>E-mail - wowme@gmail.com</p></center>
			<br>
		</footer>
	-->
	</body>
	
</html>






