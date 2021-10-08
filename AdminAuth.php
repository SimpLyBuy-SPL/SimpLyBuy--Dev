<?php 
	
	session_start();

	$admin ="";
	$email ="";
	$pass1="";
	$errors =array();

	$db = mysqli_connect('localhost','root', '', 'registration');
	if(mysqli_connect_errno()){
		echo 'could not connect to server.';
	}
	

	if(isset($_POST['login'])){

		$admin = $_POST['username'];
		$password = $_POST['password'];

		if(empty($admin)){
			echo "Username is Required."; }
		if(empty($password)){
			echo "Password is Required."; }


		if(count($errors)==0){

			$query = "SELECT * FROM admin WHERE Name ='$admin' AND Password='$password';";
			$result = mysqli_query($db, $query) or die("Bad query: $query") ;
			$row = mysqli_fetch_assoc($result);


			if(mysqli_num_rows($result)==1){

				$_SESSION['username']= $admin;
				$_SESSION['success']="You are now Logged In.";
				header("location:AdminProfile.php");
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