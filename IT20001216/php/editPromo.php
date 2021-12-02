<?php

	include 'config.php';

?>



<!DOCTYPE HTML>

<html>

	<head>
	
		<title>WOWme - Online Recipe Management System</title>
		
		<link rel = "stylesheet" href = "../css/editPromoStyles.css">
		
		<script src = "../js/editPromoScript.js"></script> <!-- linking external javascript -->
		
	</head>
	
	<body>
	
		<a href = "edOrDelPromo.php"><button type = "button" id = "back">Back</button></a> <!-- Back button to go back to "Edit/Delete Promotion" Page -->
		
		<h1>Edit Promotion</h1>
		
		<div>
		
			<?php
			
				$promotionId = $_GET['id'];
			
				$sql = "SELECT * FROM promotions WHERE promotion_id = $promotionId";
				
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()) {
						$id = $row["promotion_id"];
						$ti = $row["title"];
						$cat = $row["category"];
						$da = $row["date"];
						$de = $row["details"];
					}
					
				}
			
			?>
		
			<form action = "editPromoProccess.php" method = "POST"> <!-- Form to add details of promotion and then update to database -->
			
			<label>Promotion Id</label>
			<input type = "text" name = "id" value = <?php echo $id ?> readonly style = "background-color: transparent; color: white; border: none;" id = "promoid"><br><br>
			
			<label>Title*</label>
			<input type = "text" name = "ti" value = "<?php echo $ti ?>" id = "ttl" pattern = "[a-zA-Z ]{1,25}" required><br><br>
			
			<label>Previously Selected Category</label>
			<input type = "text" value = <?php echo $cat ?> id = "ctgry" readonly><br><br>
			
			<label>New Category*</label>
			<select name = "ca" id = "dropdown">
					<option value = "Chef">Chef</option>
					<option value = "Culinary-school">Culinary-school</option>
					<option value = "Event">Event</option>
			</select><br><br>
			
			<label>Date*</label>
			<input type = "date" name = "da" value = <?php echo $da ?> id = "dt" required><br><br>
			
			<label>Details*</label>
			<textarea name = "de" rows = "10" cols = "64" required maxlength = "100"><?php echo $de ?></textarea><br><br>
			
			<input type = "submit" value = "Save">
				
			</form>
			
			<br>
			
			<button type = "button" id = "info" onclick = "displayInfo('info')">?</button> <!-- Button which when clicked, displays information -->
			<p id = "sntnc">Click for more info</p> <!-- Statement which is swapped for information through javascript -->
			
		</div>
		
	</body>
	
</html>