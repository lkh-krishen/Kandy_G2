<?php

	session_start();
	
	$User_ID = "";
	$First_Name = "";
	$Last_Name = "";
	$Gender = "";
	$Mobile_Number = "";
	$Email_Address = "";
	
	$errors =array();
	
	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'recipe');
	
	//if the SignUp button clicked
	if (isset($_POST["btnsubmit"])){
		$User_ID = $_POST['User_ID'];
		$First_Name = $_POST['First_Name'];
		$Last_Name = $_POST['Last_Name'];
		$Gender = $_POST['Gender'];
		$Mobile_Number = $_POST['Mobile_Number'];
		$Email_Address = $_POST['Email_Address'];
		$Password_1 = $_POST['Password_1'];
		$Password_2 = $_POST['Password_2'];
		
		//if there are no errors, save user to database
		if(count($errors) ==0){
			$Password = md5($Password);
			$sql= "INSERT INTO user(User_ID, First_Name, Last_Name, Gender, Mobile_Number, Email_Address, Password)
						VALUES('$User_ID','$First_Name','$Last_Name','$Gender', '$Mobile_Number', '$Email_Address', '$Password_2')";
			
			mysqli_query($db, $sql);
			$_SESSION['Email_Address'] = $Email_Address;
			$_SESSION['success'] = "You logged in";
			header('location:../php/home.php');
		}	
	}
	
	//log user in from login page
	if (isset($_POST['login'])){
		$Email_Address = ($_POST['Email_Address']);
		$Password = ($_POST['Password']);
		
		if(count($errors)==0){
			
				$Password =('$Password');
				$query = "SELECT * FROM user WHERE Email_Address='$Email_Address' AND Password='$Password'";
				$result = mysqli_query($db, $query);
			
				if(mysqli_num_rows($result)==1){
					$_SESSION['Email_Address'] = $Email_Address;
					$_SESSION['success'] = "You have successfully logged in...";
					header('location:home.php');
				}
				else {
					array_push($errors,"You have entered wrong Email/Password !");
					header('location:start.php');
				}
		}
	}
	
	//signout
	if(isset($_GET['signout'])){
		session_destroy();
		unset($_SESSION['Email_Address']);
		header('location: start.php');
	}
	
?>