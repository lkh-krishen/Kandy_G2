
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
		
		<div class = "form-area3">
		<h4>Got a Question?</h4>
		<h6>WOWme team is ready to answer any of your questions in no time</h6>
			<form method = 'post' action="feedbackUpdate.php" name="myForm3" onsubmit="return validateForm3()"  >
				<input placeholder="Enter your name" type="text" name="iname" id = "form1" pattern = "[A-Za-z]{3,10}"><br><br>
				
				<input placeholder="Enter your email" type="text" name="email" id = "form1"  pattern = "[a-z0-9._%+-]+@[a-x0-9.-]+\.[a-z]{2,3}"><br><br>
				
				<textarea placeholder="Enter your question here..." name= "comment" id = "form2"></textarea><br><br>
									
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


<!-- document.getElementById(element).classList.remove(“unchecked”);
document.getElementById(element).classList.add(“checked”);
}
else
{
document.getElementById(element).classList.remove(“checked”); document.getElementById(element).classList.add(“unchecked”);
} -->



