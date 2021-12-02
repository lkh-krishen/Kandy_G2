<?php

		require('config.php');
		
		$rate = $_POST['rate'];
		$option = $_POST['subject'];
		$comment = $_POST['cm'];
		
		$sql = "INSERT INTO regfeedback(rfId, rate, selection, comment) 
			VALUES ('', '$rate', '$option', '$comment')";
	
	if(mysqli_query($conn, $sql))
	{
		echo "<script>alert('Successful!')</script>";
	}
	
	else
	{
		echo "<script>alert('Error!')</script>";
	}

		
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
		<br><br>
		
		<div class = "form-area">
		<form>
			<p id="p1">Feel free to drop us a line and give us your feedback</p>
			<p id="p2">Your opinion is important to us.<br>
			This way we can keep improving our website.</p><br>
				
				<button id = "btn1" style="left: 690px;"><a href = "feedback1.php">Are you new to WOWme?</a></button><br>
				<p id="p3">Try out our quick evaluation.</p><br>
				
				<button id = "btn2" style="left: 670px;"><a href = "feedback2.php">Are you a regular user of WOWme?</a></button><br>
				<p id="p3">Share your experience with us.</p><br>
				
				<button id = "btn3" style="left: 740px;"><a href = "feedback3.php">Got a question?</a></button><br>
				<p id="p3">Chat with us.<br>WOWme team is here to help you.</p><br>
				
				<button id = "btn5" style="left: 730px;"><a href = "feedbackTable.php">View your feedbacks</a></button><br>
				<p id="p3">View and update the feedbacks you've posted so far.</p><br>
				
		</form>	
		</div>	
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






