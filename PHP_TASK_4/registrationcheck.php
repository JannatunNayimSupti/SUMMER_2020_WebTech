<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$uname = $_POST['userName'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		if(empty($uname) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($gender) || empty($day) || empty($month) || empty($year))
		{
			echo "please submit all information".'<a href="HomePage.html"><u>Home</a>';
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "your password and confirm password didn't match!".'<a href="publicHome.php"><u>Home</a>';
			}
			else
			{
				$user = [
						'userName'=>$uname,
						'email'   =>$email,
						'pass'    =>$password
					];

			$_SESSION['userName']   = $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['pass'] 	    = $password;
			$_SESSION['user'] 		= $user;

			setcookie('userName', $uname, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('pass', $password, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			echo "Cookie set.";

			header('location: login.php');
			}
		}

	}else{
		echo "Cookie not set.";
	}


?>