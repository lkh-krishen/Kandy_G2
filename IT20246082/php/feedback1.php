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
		
		<div class = "form-area2">
		<h4>What did you like the most in our website?</h4>
		
			<form method = 'post' name="myForm2" onsubmit="check()" action="feedback11.php" >
			
				<label id = "p3">1. Site load time is reasonable.</label><br><br>
				<input type = 'radio' name = 'subject1' class = 'radiostyle' id = "form3" value = 'Yes' checked><label id = "p4">Yes</label>
				<input type = 'radio' name = 'subject1' class = 'radiostyle' id = "form3" value = 'No' checked><label id = "p4">No</label>
				<input type = 'radio' name = 'subject1' class = 'radiostyle' id = "form3" value = 'Satisfactory' checked><label id = "p4">Satisfactory</label><br><br>
				
				<label id = "p3">2. Adequate text to background contrast.</label><br><br>
				<input type = 'radio' name = 'subject2' class = 'radiostyle' id = "form3" value = 'Yes' checked><label id = "p4">Yes</label>
				<input type = 'radio' name = 'subject2' class = 'radiostyle' id = "form3" value = 'No' checked><label id = "p4">No</label>
				<input type = 'radio' name = 'subject2' class = 'radiostyle' id = "form3" value = 'Satisfactory' checked><label id = "p4">Satisfactory</label><br><br>
				
				<label id = "p3">3. Navigation is easily identifiable.</label><br><br>
				<input type = 'radio' name = 'subject3' class = 'radiostyle' id = "form3" value = 'Yes' checked><label id = "p4">Yes</label>
				<input type = 'radio' name = 'subject3' class = 'radiostyle' id = "form3" value = 'No' checked><label id = "p4">No</label>
				<input type = 'radio' name = 'subject3' class = 'radiostyle' id = "form3" value = 'Satisfactory' checked><label id = "p4">Satisfactory</label><br><br>
				
				<label id = "p3">4. Site search is easy to access.</label><br><br>
				<input type = 'radio' name = 'subject4' class = 'radiostyle' id = "form3" value = 'Yes' checked><label id = "p4">Yes</label>
				<input type = 'radio' name = 'subject4' class = 'radiostyle' id = "form3" value = 'No' checked><label id = "p4">No</label>
				<input type = 'radio' name = 'subject4' class = 'radiostyle' id = "form3" value = 'Satisfactory' checked><label id = "p4">Satisfactory</label><br><br>
				
				<label id = "p3">5. Content is easier to read and simple to understand.</label><br><br>
				<input type = 'radio' name = 'subject5' class = 'radiostyle' id = "form3" value = 'Yes' checked><label id = "p4">Yes</label>
				<input type = 'radio' name = 'subject5' class = 'radiostyle' id = "form3" value = 'No' checked><label id = "p4">No</label>
				<input type = 'radio' name = 'subject5' class = 'radiostyle' id = "form3" value = 'Satisfactory' checked><label id = "p4">Satisfactory</label><br><br>
				
				<label id = "p3">6. Clear path to contact information.</label><br><br>
				<input type = 'radio' name = 'subject6' class = 'radiostyle' id = "form3" value = 'Yes' checked><label id = "p4">Yes</label>
				<input type = 'radio' name = 'subject6' class = 'radiostyle' id = "form3" value = 'No' checked><label id = "p4">No</label>
				<input type = 'radio' name = 'subject6' class = 'radiostyle' id = "form3" value = 'Satisfactory' checked><label id = "p4">Satisfactory</label><br><br>
				
				<input type = "submit" id = "submit1" value = "Submit">
					
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

<!--  -->




