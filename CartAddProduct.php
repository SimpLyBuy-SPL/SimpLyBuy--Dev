<?php
	
	include('SimplyBuyServer.php');

	if(isset($_GET['addCartID'])){

		$dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
    	    echo 'could not connect to server.';
   		}

		$id = $_GET['addCartID'];
		$count = $_GET['addCartCount'];

		echo $id;
		echo $count;

		$sql = "INSERT INTO cart (CartProductID, CartQuantity) VALUES ($id, $count);" ;
    	$result = mysqli_query($dbCart,$sql);
    	header('location:cart.php');
	}

?>