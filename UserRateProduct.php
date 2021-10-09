<?php
	
	include('SimplyBuyServer.php');

	$dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
    if(mysqli_connect_errno()){
	    echo 'could not connect to server.';
	}

	$rating = $_POST['rating'];
	$productID = $_POST['productID'];

	$sql = "SELECT * From product WHERE ProductID = '$productID';" ;
    $result = mysqli_query($dbCart,$sql);
    $row = mysqli_fetch_assoc($result);

    $totalRating= $row['Rating'] * $row['RatedCount'];
    $newTotalRating = $totalRating + $rating;
    $newRatedCount = $row['RatedCount'] + 1;
    $newRating = $newTotalRating/$newRatedCount;

    $sql = "UPDATE product SET Rating = '$newRating', RatedCount = '$newRatedCount' WHERE ProductID = '$productID';" ;
    $result = mysqli_query($dbCart,$sql);

    header("location:ProductDetails.php?ProductID=$productID");
?>