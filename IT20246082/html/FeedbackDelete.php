<?php
	require 'config.php';
	
	$record = $_GET['id'];
	
	$sql = "DELETE FROM regfeedback WHERE rfId = $record";
	
	if(mysqli_query($conn, $sql))
	{
		echo "<script> alert('Record deleted successfully!') </script>";
		
	}
	else
	{
		echo "<script> alert('Error!!') </script>";
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
		
		
		<div class = "form-area4" style="top: 390px;">
		<h4>Your feedbacks so far...</h4>
		<form>
		<div class = 'productData'>
			<table border = '1'>
					<tr>
						<th> Feedback id </th>
						<th> User id </th>
						<th> Rating </th>
						<th> Opinion </th>
						<th> Comment </th>
						<th> Date </th>
						<th> Time </th>
						<th> Delete </th>
					</tr>
					<?php
				$sql = "SELECT * FROM regfeedback";
				
				$result = $conn -> query($sql);
				
				if($result-> num_rows > 0)
				{
					while($row = $result -> fetch_assoc())
					{
						$id = $row['rfId'];
						
						echo "<tr>	<td>".$row['rfId']."</td>
									<td>".$row['UserId']."</td>
									<td>".$row['rate']."</td>
									<td>".$row['selection']."</td>
									<td>".$row['comment']."</td>
									<td>".$row['date']."</td>
									<td>".$row['time']."</td>
									<td><button id = 'btn4'><a href = 'FeedbackDelete.php?id=$id'>Delete</a></button></td>
							<tr>";
					}
				}
			?>
					
			</table>
		</div>
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