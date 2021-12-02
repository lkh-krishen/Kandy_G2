<!DOCTYPE HTML>

<html>

	<head>
	
		<title>WOWme - Online Recipe Management System</title>
		
		<link rel = "stylesheet" href = "../css/promoPanelStyles.css"> <!-- linking external css stylesheet-->
		
	</head>
	
	<body>
	
		<form method = "POST" action = "promoSignoutProccess.php">
			<input type = "submit" name = "promoSignout" value = "Sign Out" id = "btn1"> <!-- Adding sign out button-->
		</form>
		
		<h1>Promotions Panel</h1> <!-- Adding heading for page-->
		
		<div>
			<center> <!-- Centering buttons-->
				<a href = "../html/addPromo.html"><button type = "button" id = "btn2">Add Promotion</button></a> <!-- Adding button which when clicked shows promotion addition form-->
				<a href = "../php/edOrDelPromo.php"><button type = "button" id = "btn3">Edit/Delete Promotion</button></a> <!-- Adding button which when clicked shows table of records of previousy added promotions-->
			</center>
		</div>
		
	</body>
	
</html>