<?php
	
	include('SimplyBuyServer.php');

	if(empty($_GET['user'])){
		header('location:Login.php');
	}

	else if(isset($_GET['addCartID'])){

		$dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
    	    echo 'could not connect to server.';
   		}

		$id = $_GET['addCartID'];
		$count = $_POST['count'];
		$user = $_GET['user'];


		$sql = "INSERT INTO cart (UserName, CartProductID, CartQuantity) VALUES ('$user', '$id', '$count') ON DUPLICATE KEY UPDATE CartQuantity = '$count';" ;
    	$result = mysqli_query($dbCart,$sql);
    	header("location:cart.php?user=$user");
	}

?>