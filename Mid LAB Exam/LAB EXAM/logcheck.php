<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$userId 	= $_POST['userId'];
		$password 	= md5($_POST['pass']);


		if(empty($userId) || empty($password) ){
			echo "null submission found!";
		}else{
			$file = fopen('user.txt', 'r');
			$data = fread($file, filesize('user.txt'));
			$user = explode('|', $data);

			if(trim($user[0]) == $uname && trim($user[1]) == $password){
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
				echo "Invalid username/password";
			}
		}	

	}else{
		header('location: login.php?msg=submit_button_error');
	}
?>