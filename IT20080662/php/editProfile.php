<?php
	include 'config.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/editStyles.css">
		<script src="../js/editScript.js"></script>

	<!--add a title-->
		<title> WOWme - Online Recipe Management System </title>
	</head>
	
	<body>
	
	<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
		
		<!-- add button -->
		<ul class = "list">
			<li class = "list"><a href = "../html/manageProfile.html" class = "list"><button type = "button">Manage Profile</button></a></li>
			<li class = "list"> <class = "list"><button type = "button" id = "btn">Sign Out</button></a></li>
		</ul>
		<!-- add a logo -->
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center>
		
		<!-- add a horizontal menu -->
		<ul class="menu">
			<li class="menu"><a href="../php/home.php" class = "menu">Home</a></li>
			<li class="menu"><a href="#" class = "menu">Recipes</a></li>
			<li class="menu"><a href="#" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="#" class = "menu">Feedback</a></li>
			<li class="menu"><a href="#" class = "menu">Promotions</a></li>
		</ul>
		<br>

	<div class="column" >
		<img src="../images/burger.jpg" width="750px" height="595px" style="margin-right:70%">
	</div>
	
	<!-- add edit profile form -->		
	<div class="editlog" class="column" >
	
	<form  action="editProfileProcess.php" method="POST"> 
	<br>
	
		<label> User ID  </label> <br>
		<input type="text" name ="Userid" > 
		<br><br>
	
		<label> Name </label> <br>
		<input type="text" name ="name" >
		<br><br>
		
		<label> E-mail Address </label> <br>
		<input type="email" name ="mail" pattern="[a-z0-9._%+-]+@[a-z0-9._%+-]+\.[a-z]{2,3}$" placeholder="alibaba@my.com" ><br><br>

		<label> Password </label><br>
		<input type="password" id="pwd" name="pswrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number, one uppercase, lowercase letter, and minimum 5 or more characters"> 
		<br><br>
	
		<label for="rpwd"> Re-enter Password </label><br>
		<input type="password" id="rpwd" name="rpswrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number, one uppercase, lowercase letter, and minimum 5 or more characters" > 
		<br><br>
	
		<input type="checkbox" id="acc" name="acc" onclick="enableButton()" selected>
		<label for="acc">Accept privacy policy and terms</label><br><br>
	
		<input type="submit" id="btnsubmit" name="update" value="Save Changes" disabled><br>
	
	</form>
	</div>
.
	</body>
</html>		