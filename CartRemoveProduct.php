<?php
	
	include('SimplyBuyServer.php');

	if(isset($_GET['deleteID'])){

		$dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
        if(mysqli_connect_errno()){
    	    echo 'could not connect to server.';
   		}
		$id = $_GET['deleteID'];
		$sql = "delete From cart WHERE CartProductID = $id;" ;
    	$result = mysqli_query($dbCart,$sql);
    	header("location:cart.php?user=$user");
	}

?>
