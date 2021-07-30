<?php 
	
	session_start();

	$username ="";
	$email ="";
	$pass1="";
	$pass2 ="";
	$errors =array();

	$db = mysqli_connect('localhost','root', '', 'registration');
	if(mysqli_connect_errno()){
		echo 'could not connect to server.';
	}
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		if(empty($username)){
		array_push($errors, "Username is Required.");
		}
		if(empty($email)){
			array_push($errors, "Email is Required.");	}
		if(empty($pass1)){
			array_push($errors, "Password is Required.");
		}
		if($pass2 != $pass1){
			array_push($errors, "Password does not Match");
		}
		if(count($errors)==0){
			$password = md5($pass1);
			$sql = "INSERT INTO user(username,email,password) VALUES('$username','$email','$password');";
			mysqli_query($db,$sql);
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now Logged In.";
			header('location: home.php');
		}
	}


	

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password =$_POST['password'];

		if(empty($username)){
		array_push($errors, "Username is Required.");	}
		if(empty($password)){
		array_push($errors, "Password is Required."); }

		if(count($errors)==0){
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username ='$username' AND password='$password';";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result)==1){

				$_SESSION['username']= $username;
				$_SESSION['success']="You are now Logged In.";
				header('location: home.php');
			}
			else{
				array_push($errors,"Login Credentials Don't Match");
			}
		}
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: home.php');
	}

?>