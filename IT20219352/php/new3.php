
<?php
include 'config.php';
?>
	
	
	
<!DOCTYPE html>
<head>

	<title>WOWme - Online Recipe Management System</title>
	<link rel = "stylesheet" href = "../css/homeStyles.css">
	<script type="text/javascript" src="../js/myScript.js"></script>
	<style>
		td{
		height:100px;
		width:auto;
		font size:5
		border: 1px solid black;
		overflow: hidden;
		
		table {
		border: 1px solid black;
		table-layout: fixed;
		position:absolute
				}
	</style>
</head>
<img src = "../images/avatarplaceholder.png" alt = "Avatar" id = "avatar">
		<ul class = "list">
			<li class = "list"><a href = "#" class = "list"><button type = "button">Manage Profile</button></a></li>
			<li class = "list"><a href = "#" class = "list"><button type = "button" id = "btn">Sign Out</button></a></li>
		</ul>
		<center><img src = "../images/logo.jpg" alt = "Logo" id = "logo"></center>

	
	
	
	<body>

	<ul class="menu">
			<li class="menu"><a href="#" class = "menu">Home</a></li>
			<li class="menu"><a href="#" class = "menu">Recipes</a></li>
			<li class="menu"><a href="../html/TopRated.html" class = "menu">Top Rated</a></li>
			<li class="menu"><a href="#" class = "menu">Feedback</a></li>
			<li class="menu"><a href="#" class = "menu">Promotions</a></li>
		</ul>
		
		
	<table class="data" >
    <table  width="100%"  bgcolor="#f2f2f2" border="15" >
			<tr >
				<th class="th1"><span class="rtext">Review Rating ID<span></th>
				<th class="th1"><span class="rtext">Username<span></th>
				<th class="th1"><span class="rtext">Review<span></th>
				<th class="th1"><span class="rtext">Rating<span></th>
				<th class="th1"><span class="rtext"><span></th>
				
			</tr>
			
		<?php

			$sql = "select * from recipe3";
			$result = $conn->query($sql);
			
			if ($result->num_rows>0){
			
				while($row=$result->fetch_assoc())
				{
					$id=$row['review_ratingID'];
				echo"<tr><td><br>".$row["review_ratingID"]."</td>
						<td><br>".$row["username"]."</td>
						<td><br>".$row["Review"]."</td>
						<td><br>".$row["Rating"]."</td>
						<td><a href='deleteitems3.php?id=$id' >Delete</a></td>
						
				</tr>";
				}
				
			}
			else {
				echo "No results available";
			}
			echo"</table>";
			
			
		$conn -> close();
			
		?>
		
			
	
	
	<!--footer-->
	<footer class="footer">
			
	</footer>
	
</body>
</html>