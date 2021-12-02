<?php
	include 'config.php'
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/startStyles.css">
	</head>
	
	<head><meta name="viereport" content="width=device-width,initial-scale=1"></head>
	
	<head>
		<!--add a title-->
		<title> WOWme ONLINE RECIPE MANAGEMENT SYSTEM </title>
	</head>
	
	<div class="headbox">
	<!-- add a logo -->
	<img src="../images/logo.jpg" width="650px" height="600px" style="float:left">
	</div>
	<body>
	
	<!--add a login menu-->
	<div class="log" >
		<form action="startProcess.php" method="post" >
	
		<img class="logo" src="../images/login.png" width="100px" height="100px" alt=online >
	
		<input type="text" id ="mail" name="mail" placeholder="E-mail" required><br><br>

		<input type="Password" id="pswrd" name="pswrd" placeholder="Password" title="Must contain at least one number, one uppercase, lowercase letter, and 5 or more characters" required> <br><br>
	
		<input type="checkbox" id="rem_me" selected>
		<label for="rem_me"> Remember me</label> <br><br>
		
		<input type="submit" id="btn" name="login" value="Log in">
		
		<p>
		Create New Account<a href="../html/register.html" style="font-size:22px"> Sign Up </a> <br>
		</p>
	</form>
	
	</div>
	
	</body>
</html>