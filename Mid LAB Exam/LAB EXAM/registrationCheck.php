<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$userId = $_POST['userId'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$confirmPassword = $_POST['confirmPassword'];
		$userType = $_POST['userType'];
		
		if(empty($userId) || empty($userType) || empty($password) || empty($email) || empty($name) || empty($confirmPassword))
		{
			echo "please submit all information";
		}
		else 
		{
			if($password != $confirmPassword)
			{
				echo "your password and confirm password didn't match!";
			}
			else
			{
			$user = ['userType'=> $userType,'userId'=> $userId,'pass'=> $password];

			$_SESSION['userType']   = $userType;
			$_SESSION['userId']     = $userId;
			$_SESSION['pass'] 	    = $password;
			$_SESSION['user'] 		= $user;

			setcookie('userId', $userId, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('pass', $password, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			setcookie('userType', $userType, time()+3600, '/');

			echo "Cookie set.";

			header('location: login.php');
			}
		}

	}else{
		echo "Cookie not set.";
}
?>