<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['name'];
		$password 	= md5($_POST['pass']);

		if(empty($uname) || empty($password) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['name']) && isset($_COOKIE['pass'])){
				if($uname == $_COOKIE['name'] && $password == $_COOKIE['pass']){
					
					setcookie('status', "OK", time()+3600, '/');
					header('location: dashBoard.php');

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