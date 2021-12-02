<!DOCTYPE HTML>

<html>

	<head>
	
		<title>WOWme - Online Recipe Management System</title>
	
		<link rel = "stylesheet" href = "../css/edOrDelPromoStyles.css"> <!-- Linking external css stylesheet-->
	
	</head>
	
	<body>
	
		<a href = "promoPanel.php"><button type = "button" id = "back">Back</button></a> <!-- Back button to go back to "Promotions Panel"-->
		
		<h1>Edit/Delete Promotion</h1> <!-- Heading for page-->
		
		<div> <!-- Seperate division for table to format background-->
		
			<table>
				
				<tr>
					<th>Promotion Id</th>
					<th>Title</th>
					<th>Category</th>
					<th>Date Added</th>
					<th>Details</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
		
				<?php
			
					include 'config.php';
				
					$sql = "SELECT * FROM promotions";
				
					$result = $conn -> query($sql);
			
					if($result -> num_rows > 0){
				
						while($row = $result -> fetch_assoc()){
							echo "<tr>
								  <td>".$row['promotion_id']."</td>
								  <td>".$row['title']."</td>
								  <td>".$row['category']."</td>
								  <td>".$row['date']."</td>
								  <td>".$row['details']."</td>
								  <td><a href = 'editPromo.php?id=$row[promotion_id]'><button type = 'submit'>Edit</button></a></td>
								  <td><a href = 'deletePromoProccess.php?id=$row[promotion_id]'><button type = 'submit'>Delete</button></a></td>
								  </tr>";
						}
					
					}	 
				
					else{
				
						echo "No Records Found";
					
					}
			
			?>
			
		</div>
		
	</body>
	
</html>