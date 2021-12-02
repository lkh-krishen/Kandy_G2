<?php
	$conn = mysqli_connect("localhost", "root", "", "recipe");
	$db = mysqli_select_db($conn, '');
	
	if (isset($_POST['update'])){
		
		$UserID = $_POST['userid'];
		
		$query = "UPDATE user 
						 SET UserID='$_POST[Userid]', Name='$_POST[Name]', Email='$_POST[Email]', Password='$_POST[Password]'
						 WHERE UserID='$UserID'";
		
		$query_run = mysqli_query($conn,$query);
		
		if($query_run){
			echo '<script> alert ("Profile Updated Successfully...")</script>'; 
			header('location:../ph/home.php');
		}
		else {
			echo '<script> alert ("Error in Updated!!")</script>'; 	
		}
	}
	
?>