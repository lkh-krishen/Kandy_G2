<?php

session_start();

$errors = array();

include 'config.php';

//log user in from login page
	if (isset($_POST['login'])){
		$Email = ($_POST['mail']);
		$Password = ($_POST['pswrd']);
		
		if($Email == "promoadmin@gmail.com" && $Password = "Promoadmin420"){
			header('location:../../IT20001216/php/promoPanel.php');
		}
		
		else{
			
			if(count($errors)==0){
		
				$query = "SELECT * FROM user WHERE Email='$Email' AND Password='$Password'";
				$result = mysqli_query($conn, $query);
			
				if(mysqli_num_rows($result)==1){
					$_SESSION['Email'] = "$Email";
					$_SESSION['Email'] = "You have successfully logged in..."; 
					header('location:home.php');
				}
				else {
					array_push($errors,"You have entered wrong Email/Password !");
					header('location:start.php');
				}
			}
		}
	}
?>	