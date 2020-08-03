<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$userId 	= $_POST['userId'];
		$password 	= md5($_POST['pass']);


		if(empty($userId) || empty($password) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['userId']) && isset($_COOKIE['pass'])){
				if($userId == $_COOKIE['userId'] && $password == md5($_COOKIE['pass'])){
					if($_COOKIE['userType'] == "Admin")
					{
						setcookie('status', "OK", time()+3600, '/');
					    header('location: AdminPage.php');
					}
					else{
						setcookie('status', "OK", time()+3600, '/');
					    header('location: UserPage.php');
					}
				}else{
					header('location: login.php?msg=sorry_invalid_username/password');
				}
			}else{
				echo "don't have any account!";
			}
		}	

	}else{
		header('location: login.php?msg=submit_button_error');
	}
?>