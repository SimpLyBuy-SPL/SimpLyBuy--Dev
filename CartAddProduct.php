<?php
	
	include('SimplyBuyServer.php');

	if(isset($_GET['addCartID'])){

		$dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
    	    echo 'could not connect to server.';
   		}

		$id = $_GET['addCartID'];
		$count = $_GET['addCartCount'];
		$user = $_GET['user'];


		$sql = "INSERT INTO cart (UserName, CartProductID, CartQuantity) VALUES ('$user', '$id', '$count');" ;
    	$result = mysqli_query($dbCart,$sql);
    	header("location:cart.php?user=$user");
	}

?>