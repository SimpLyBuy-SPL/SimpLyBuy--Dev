<?php

	$deleteID = $_GET['deleteID'];
    $dbCart = mysqli_connect('localhost','root', '', 'simplybuy');
    if(mysqli_connect_errno()){
        echo 'could not connect to server.';
    }

    $sql =  "DELETE FROM product WHERE product.ProductID = '$deleteID'; " ;
    $result = mysqli_query($dbCart,$sql) or die("Error in $sql");
    header('location:ProductList.php');

?>